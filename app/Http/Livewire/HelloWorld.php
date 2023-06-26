<?php

namespace App\Http\Livewire;

use App\Models\Role;
use LivewireUI\Modal\ModalComponent;

class HelloWorld extends ModalComponent
{
    public int $counter = 0;
    public $name;
    public $description;
    public $permission;

    protected $rules = [
        'name' => ['required', 'string', 'min:3', 'max:255','unique:roles'],
        'description' => ['nullable', 'string', 'min:3', 'max:255','unique:roles'],
    ];

    public function saveRole()
        {

            $validatedData = $this->validate();
            // dd($validatedData);
            Role::create(
                [
                    'name' => $this->name,
                    'description' => $this->description,
                ]
            );
            return redirect()->to('/manage-roles');
        }
    public static function modalMaxWidth(): string
    {
        return '7xl';
    }
    public function render()
    {
        return view('livewire.hello-world');
    }
}
