<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Treatment;

class AvailableTreatments extends Component
{
    public function render()
    {
        return view('livewire.admin.available-treatments', [
            'treatments' => Treatment::all()
        ]);
    }
}
