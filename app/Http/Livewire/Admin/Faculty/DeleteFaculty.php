<?php

namespace App\Http\Livewire\Admin\Faculty;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class DeleteFaculty extends ModalComponent
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

    public function deleteFaculty()
    {
        if(Auth::check() && Auth::user()->id !== $this->user->id ) {
            $this->user->delete();
            return redirect()->to('admin/faculty');
        }
        return redirect()->to('admin/faculty');
    }

    public function render()
    {
        return view('livewire.admin.faculty.delete-faculty');
    }
}
