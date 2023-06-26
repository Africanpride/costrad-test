<?php

namespace App\View\Components;

use App\Models\Institute;
use Illuminate\View\Component;

class UpNext extends Component
{
    /**
     * The upcoming institute.
     *
     * @var \App\Models\Institute|null
     */
    public $upcomingInstitute;
    public $today;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Get the current date
        $this->today = date('Y-m-d');

        // Find the first instance of an institute where startDate is greater than today's date
        $this->upcomingInstitute = Institute::where('startDate', '>', $this->today)
            ->orderBy('startDate', 'asc')
            ->first();
    }

    public $editionTitle = array(
        "Limited edition",
        "Collector's edition",
        "Deluxe edition",
        "Premium edition",
        "Anniversary edition",
        "Exclusive edition",
        "Signature edition",
        "Unique edition"
    );

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.up-next', [
            'upcomingInstitute' => $this->upcomingInstitute,
            'editionTitle' => $this->editionTitle,
        ]);
    }
}
