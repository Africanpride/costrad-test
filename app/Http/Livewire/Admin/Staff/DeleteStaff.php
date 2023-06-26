<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class DeleteStaff extends ModalComponent
{
    public User $user;

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function deleteStaff()
    {
        if(Auth::check() && Auth::user()->id !== $this->user->id ) {
            $this->user->delete();
            return redirect()->to('admin/staff');
        }
        return redirect()->to('admin/staff');
    }

    public function render()
    {
        return view('livewire.admin.staff.delete-staff');
    }
}
