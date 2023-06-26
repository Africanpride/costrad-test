<?php

namespace App\Http\Livewire\Admin\Faculty;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class FacultyMembers extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.faculty.faculty-members', ['facultys' => User::Faculty()->paginate(8)]);
    }
}
