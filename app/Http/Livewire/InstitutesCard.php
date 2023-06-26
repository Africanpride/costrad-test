<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Institute;

class InstitutesCard extends Component
{
    public function render()
    {
        $institutes = Institute::where('acronym', '<>', 'costrad')->get();
        return view('livewire.institutes-card', compact('institutes'));
    }
}
