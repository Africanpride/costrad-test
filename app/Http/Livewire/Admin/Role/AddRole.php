<?php


namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use LivewireUI\Modal\ModalComponent;


class AddRole extends ModalComponent
{
    public $name;
    public $description;
    public $permission = [];

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public static function closeModalOnClickAway(): bool
{
    return false;
}
    protected $rules = [
        'name' => ['required', 'string', 'min:3', 'max:255', 'unique:roles'],
        'description' => ['nullable', 'string', 'min:3', 'max:255'],
    ];

    public function addRole()
    {

        $validatedData = $this->validate();
        // dd($validatedData);
        $role =  Role::create(
            [
                'name' => $this->name,
                'description' => $this->description,
            ]
        );
        $role->syncPermissions($this->permission);

        return redirect()->to('/manage-roles');
    }

    public function render()
    {
        return view('livewire.admin.role.add-role');
    }
}
