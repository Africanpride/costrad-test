<?php

namespace App\Http\Livewire\Admin;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientPage extends Component
{
    use WithPagination;
    public $search = '';
    public $searchTerm = '';

    public function render()
    {
        $patients = Patient::whereLike(['firstName', 'lastName', 'email', 'telephone','insuranceNumber'], $this->search)->orderByDesc('created_at')->paginate(25);
        return view('livewire.admin.patient-page', compact('patients'));
    }
}
