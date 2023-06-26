<?php

namespace App\Http\Livewire;

use App\Models\Newsroom;
use Livewire\Component;

class Article extends Component
{
    public Newsroom $newsroom;
    public int $likeCount;

    public $count = 0;
    public function increment()
    {
        $this->likeCount++;
        $this->newsroom->like = $this->likeCount;
        $this->newsroom->save();
    }


    public function mount(Newsroom $newsroom)
    {
        $this->newsroom = $newsroom;
        $this->likeCount = $newsroom->like;
    }


    public function render()
    {

        return view('livewire.article');
    }
}
