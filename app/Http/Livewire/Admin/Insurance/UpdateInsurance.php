<?php

namespace App\Http\Livewire\Admin\Insurance;

use Livewire\Component;
use App\Models\Insurance;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;

class UpdateInsurance extends ModalComponent
{

    use WithFileUploads;

    public Insurance $insurance;
    public  $name;
    public  $address;
    public  $telephone_1;
    public  $telephone_2;
    public  $telephone_3;
    public  $country;
    public  $email;
    public  $percentage;
    public  $logo;
    public $company_logo;

    public function mount(Insurance $insurance)
    {
        $this->insurance  = $insurance;
        $this->address   = $insurance->address;
        $this->name    = $insurance->name;
        $this->telephone_1     = $insurance->telephone_1;
        $this->email        = $insurance->email;
        $this->percentage       = $insurance->percentage;
        $this->country = $insurance->country;
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function updateInsurance()
    {
        $data = $this->validate([
            'name' => 'required|min:3|max:255|unique:insurances, ' . $this->insurance->id,
            'address' => 'nullable|min:3|max:255',
            'telephone_1' => 'nullable|min:3|max:255|unique:insurances,' . $this->insurance->id,
            'percentage' => 'required',
            'country' => 'required',
            'email' => 'required|unique:users,email,' . $this->insurance->id,
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        if ($this->logo) {
            Storage::delete($this->insurance->company_logo);
            $imageName = $this->logo->store("logo", 'public');
            $data['logo'] = $imageName;
        }

        $this->insurance->update(array_filter($data));
        return redirect('insurance');
    }


    public function render()
    {
        return view('livewire.admin.insurance.update-insurance');
    }
}
