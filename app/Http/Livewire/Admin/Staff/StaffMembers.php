<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class StaffMembers extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.staff.staff-members', ['staffs' => User::Staff()->paginate(8)]);
    }
}
