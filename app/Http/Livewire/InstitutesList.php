<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Institute;

class InstitutesList extends Component
{
    public function render()
    {
        // Fetch the first 4 objects excluding the one with slug 'costrad'
        $firstFour = Institute::where('slug', '<>', 'costrad')->take(4)->get();

        // Fetch the last 4 objects excluding the one with slug 'costrad'
        $lastFour = Institute::where('slug', '<>', 'costrad')->skip(5)->take(4)->get();
        $nextInstituteBanner = Institute::where('startDate', '>', now())
        ->orderBy('startDate', 'asc')
        ->first();


        return view('livewire.institutes-list', compact('firstFour', 'lastFour', 'nextInstituteBanner'));
    }
}
