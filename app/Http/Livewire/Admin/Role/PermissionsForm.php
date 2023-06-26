<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;
use App\Models\Permission;

class PermissionsForm extends Component
{
    public $name;
    public $permission;

    public function createPermission()
    {
        $this->validate([
            'name' => 'required|string|unique:permissions',
        ]);

        Permission::create(['name' => $this->name]);

        $this->resetInput();
    }

    public function updatePermission(Permission $permission)
    {
        $this->validate([
            'name' => 'required|string|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update(['name' => $this->name]);
    }

    public function deletePermission(Permission $permission)
    {
        $permission->delete();
    }

    public function createRole()
    {
        $this->validate([
            'name' => 'required|string|unique:roles',
            'permission' => 'required|array',
        ]);

        $role = Role::create(['name' => $this->name]);
        $role->syncPermissions($this->permission);

        $this->resetInput();
    }

    public function updateRole(Role $role)
    {
        $this->validate([
            'name' => 'required|string|unique:roles,name,' . $role->id,
            'permission' => 'required|array',
        ]);

        $role->update(['name' => $this->name]);
        $role->syncPermissions($this->permission);
    }

    public function deleteRole(Role $role)
    {
        $role->delete();
    }

    public function resetInput()
    {
        $this->name = null;
        $this->permission = null;
    }
}
