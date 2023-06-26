<?php

namespace App\Http\Livewire\Admin\Patient;

use App\Models\Patient;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeletePatient extends ModalComponent
{
    public Patient $patient;
    public function mount(Patient $patient)
    {
        $this->patient = $patient;
    }

    public function deletePatient()
    {
        $this->patient->delete();
        return redirect()->to('/patients');
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public function render()
    {
        return view('livewire.admin.patient.delete-patient');
    }
}
