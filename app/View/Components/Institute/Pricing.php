<?php

namespace App\View\Components\Institute;

use Illuminate\View\Component;

class Pricing extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $price;


    public function __construct($price)
    {
        //
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.institute.pricing');
    }
}
