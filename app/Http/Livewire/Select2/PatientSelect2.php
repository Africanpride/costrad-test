<?php

declare(strict_types=1);

namespace App\Http\Livewire\Select2;

use Livewire\Component;
use App\Models\Patient;

/**
 * Single Select2 Component
 *
 * @package Blockpc\Select2Wire
 */
class PatientSelect2 extends Component
{
    public Patient $Patient;
    public $search;

    protected $listeners = [
        'set-Patient' => 'set_Patient',
        'clear'
    ];

    public function mount()
    {
        $this->Patient = new Patient;
    }

    public function getOptionsProperty()
    {
        return Patient::where('name', 'LIKE', "%{$this->search}%")->get();
    }

    public function render()
    {
        return view('livewire.select2.Patient-select2', [
            'options' => $this->options,
        ]);
    }

    public function save()
    {
        $this->Patient = Patient::firstOrCreate(['name' => $this->search]);
        $this->search = "";
    }

    public function select(Patient $Patient)
    {
        $this->Patient = $Patient;
    }

    /** listener */
    public function clear()
    {
        $this->Patient = new Patient;
        $this->reset('search');
    }

    /** listener */
    public function set_Patient(Patient $Patient)
    {
        $this->Patient = $Patient;
    }
}