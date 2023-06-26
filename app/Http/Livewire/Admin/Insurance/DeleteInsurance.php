<?php

namespace App\Http\Livewire\Admin\Insurance;

use App\Models\Insurance;
use LivewireUI\Modal\ModalComponent;

class DeleteInsurance extends ModalComponent
{

    public Insurance $insurance;
    public function mount(Insurance $insurance)
    {
        $this->insurance = $insurance;
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function deleteInsurance()
    {
        $this->insurance->delete();
        return redirect()->to('/insurance');
    }

    public function render()
    {
        return view('livewire.admin.insurance.delete-insurance');
    }
}
