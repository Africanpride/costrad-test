<?php

namespace App\Http\Livewire\Admin;

use App\Models\Permission;
use Livewire\Component;

class AvailablePermissions extends Component
{
    public function render()
    {
        $permissions = Permission::paginate(10);
        return view('livewire.admin.available-permissions', compact('permissions'));
    }
}
