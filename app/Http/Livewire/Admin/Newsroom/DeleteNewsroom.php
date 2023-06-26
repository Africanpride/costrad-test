<?php

namespace App\Http\Livewire\Admin\Newsroom;

use Livewire\Component;
use App\Models\Newsroom;
use LivewireUI\Modal\ModalComponent;

class DeleteNewsroom extends ModalComponent
{

    public Newsroom $newsroom;

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function mount(Newsroom $newsroom)
    {
        $this->newsroom = $newsroom;
    }

    public function deleteNewsroom()
    {
        $this->newsroom->delete();
        return redirect()->to('admin/newsroom');
    }
    public function render()
    {
        return view('livewire.admin.newsroom.delete-newsroom');
    }
}
