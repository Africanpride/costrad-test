<?php

namespace App\Http\Livewire\Layout\Main;

use Livewire\Component;
use App\Models\Institute;

class Header extends Component
{
    public function render()
    {
        return view('livewire.layout.main.header',  ['costrad' => Institute::whereAcronym('costrad')->first()]);
    }
}
