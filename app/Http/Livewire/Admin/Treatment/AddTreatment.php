<?php

namespace App\Http\Livewire\Admin\Treatment;

use Livewire\Component;
use App\Models\Treatment;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class AddTreatment extends ModalComponent
{
    public ?string $name;
    public ?string $description;
    public ?string $price;
    public ?bool $active;
    public ?string $author_id;

    public function mount()
    {
        $this->author_id = Auth::user()->id;
    }

    protected $rules = [
        'name' => 'required|string|min:2|max:255|unique:treatments,name',
        'description' => 'nullable|string|min:1|max:255',
        'price' => 'nullable|min:1|max:255',
        'active' => 'boolean|required',
        'author_id' => 'required|string|min:1|max:355'
    ];

    public function addTreatment()
    {
        $data = $this->validate();
        // dd($data);
        $treatment =  Treatment::create(
            [
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,
                'active' => $this->active,
                'author_id' => $this->author_id
            ]
        );

        return redirect()->to('manage-treatment');
    }
    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public static function closeModalOnClickAway(): bool
    {
        return false;
    }



    public function render()
    {
        return view('livewire.admin.treatment.add-treatment');
    }
}
