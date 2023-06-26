<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Validator;
use App\Actions\Fortify\PasswordValidationRules;
use Auth;

class CreateNewPassword extends Component
{

    use PasswordValidationRules;
    public User $user;
    public string $password;
    public string $password_confirmation;


    public function mount(User $user) {
        $this->user = Auth::user();
    }

    /**
     * Validate and reset the user's forgotten password.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function savePassword()
    {
        $this->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        // dd($this->password);
        // Save the password
        $this->user->forceFill([
            'password' => Hash::make($this->password),
            'must_create_password' => false
        ])->save();

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.admin.create-new-password');
    }
}
