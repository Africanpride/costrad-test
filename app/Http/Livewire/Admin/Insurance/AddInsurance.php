<?php

namespace App\Http\Livewire\Admin\Insurance;

use App\Models\Insurance;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class AddInsurance extends ModalComponent
{
    use WithFileUploads;

    public $name, $address, $telephone_1, $telephone_2, $telephone_3, $country, $email, $percentage = 0, $logo;

    protected $rules = [
        'name' => 'required|min:3|max:255|unique:insurances',
        'address' => 'nullable|min:3|max:255',
        'telephone_1' => 'nullable|min:3|max:255|unique:insurances',
        'telephone_2' => 'nullable|min:3|max:255',
        'telephone_3' => 'nullable|min:3|max:255',
        'percentage' => 'required',
        'country' => 'required',
        'email' => 'required|email|unique:insurances',
        'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
    ];

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public static function closeModalOnClickAway(): bool
    {
        return false;
    }
    public function addInsurance()
    {
        $validatedData = $this->validate();

        if ($this->logo) {
            $imageName = $this->logo->store("logo", 'public');
            $validatedData['logo'] = $imageName;
        }

        Insurance::create($validatedData);

        return redirect()->to('insurance');
    }


    public function render()
    {
        return view('livewire.admin.insurance.add-insurance');
    }
}
