<?php

namespace App\Http\Livewire\Admin\Permissions;

use App\Models\Permission;
use LivewireUI\Modal\ModalComponent;

class UpdatePermission extends ModalComponent
{
    public Permission $permission;
    public $name;
    public $description;

    public function mount(Permission $permission) {
        $this->name         = $permission->name;
        $this->description  = $permission->description;
        $this->permission   = $permission;
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function updatePermission()
    {
        $validated = $this->validate([
            'name' => 'required|min:3|unique:roles,name,'.$this->permission->id,
            'description' => 'nullable|min:3',
        ]);
        // dd($this->rolePermissions);
        $this->permission->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        // alert/Toast to show success
        // $this->role->syncPermissions($this->rolePermissions);
        return redirect()->to('/manage-roles');

    }
    public function deletePermission(Permission $permission)
    {
        $this->permission->delete();
        return redirect()->to('/manage-roles');
    }


    public function render()
    {
        return view('livewire.admin.permissions.update-permission');
    }
}
