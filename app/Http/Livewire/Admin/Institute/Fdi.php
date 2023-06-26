<?php

namespace App\Http\Livewire\Admin\Institute;

use Livewire\Component;
use App\Models\Institute;

class Fdi extends Component
{

    public Institute $institute;


    public function mount () {
        $this->institute = Institute::where('acronym', 'fdi')->first();
    }
    public function render()
    {
        return view('livewire.admin.institute.fdi');
    }
}
