<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Institute;

class WhatIsCostrad extends Component
{


    public function render()
    {
        return view('livewire.what-is-costrad', ['costrad' => Institute::whereAcronym('costrad')->first()]);
    }
}
