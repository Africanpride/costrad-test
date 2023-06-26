<?php

namespace App\Http\Livewire\Admin\Faculty;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;
use App\Traits\PasswordResetNotification;
use Illuminate\Auth\Notifications\ResetPassword;

class UpdateFaculty extends ModalComponent
{
    use PasswordResetNotification;

    public User $user;
    public Role $role;
    public $firstName;
    public $lastName;
    public $email;
    public $roles;
    public $password;
    public bool $resetPassword = false;
    public bool $active = false;
    public $avatar;
    public array $facultyRoles = [];

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public static function closeModalOnClickAway(): bool
{
    return false;
}
    public function mount(User $user)
    {
        $this->user         = $user;
        $this->firstName    = $user->firstName;
        $this->lastName     = $user->lastName;
        $this->email        = $user->email;
        $this->avatar       = $user->avatar_url;
        $this->facultyRoles   = $user->roles->pluck('id')->toArray();
        $this->active       = $user->active;
        $this->roles = Role::all(); // we shall check against this
    }

    public function updateFaculty()
    {
        $data = $this->validate([
            'firstName' => 'required|min:2',
            'lastName' => 'required|min:2',
            'email' => 'required|unique:users,email,' . $this->user->id,
            'active' => 'required|boolean',
        ]);
        // update user with validated details
        $this->user->update($data);

        // activate faculty account
        if($this->active) {
            $this->user->makeVisible('active')->toArray();
            $this->user->forceFill([
                'active' => (bool) $this->active
            ])->save();
        }

        // update user roles
        $this->user->syncRoles($this->facultyRoles);

        // send reset password
        if($this->resetPassword) {
            $this->sendPasswordResetLink($this->user->email);
        }

        // alert/Toast to show success

        // return to faculty page
        return redirect()->to('admin/faculty');
    }

    // protected function broker(): PasswordBroker
    // {
    //     return Password::broker(config('fortify.passwords'));
    // }

    // public function sendPasswordResetLink($email)
    // {
    //     // Send the password reset link
    //     $status = $this->broker()->sendResetLink(
    //         ['email' => $email]
    //     );
    // }


    public function deleteFaculty(User $user)
    {
        $this->user->delete();
        // alert/Toast to show success
        return redirect()->to('admin/faculty');
    }

    public function render()
    {
        return view('livewire.admin.faculty.update-faculty');
    }
}
