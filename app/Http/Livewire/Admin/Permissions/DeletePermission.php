<?php

namespace App\Http\Livewire\Admin\Permissions;

use Livewire\Component;
use App\Models\Permission;
use LivewireUI\Modal\ModalComponent;

class DeletePermission extends ModalComponent
{
    public Permission $permission;
    public $name;
    public $description;

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function mount(Permission $permission) {
        $this->name         = $permission->name;
        $this->description  = $permission->description;
        $this->permission   = $permission;
    }
    public function deletePermission(Permission $permission)
    {
        $this->permission->delete();
        return redirect()->to('/manage-roles');
    }


    public function render()
    {
        return view('livewire.admin.permissions.delete-permission');
    }
}
