<?php

namespace App\Http\Livewire\Layout;
use Livewire\Component;
use App\Models\Institute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class Header extends Component
{

    public function render()
    {
        return view('livewire.layout.header',  ['costrad' => Institute::whereAcronym('costrad')->first()]);
    }
}
