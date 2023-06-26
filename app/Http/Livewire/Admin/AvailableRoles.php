<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use Livewire\Component;
use App\Models\Permission;

class AvailableRoles extends Component
{
    public function render()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('livewire.admin.available-roles', compact('roles', 'permissions'));
    }
}
