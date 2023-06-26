<?php


namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use LivewireUI\Modal\ModalComponent;


class DeleteRole extends ModalComponent
{

    public Role $role;

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function mount(Role $role)
    {
        $this->role = $role;
    }

    public function deleteRole(Role $role)
    {
        $this->role->delete();
        return redirect()->to('/manage-roles');
    }

    public function render()
    {
        return view('livewire.admin.role.delete-role');
    }
}
