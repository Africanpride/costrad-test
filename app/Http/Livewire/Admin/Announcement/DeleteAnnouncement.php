<?php

namespace App\Http\Livewire\Admin\Announcement;

use Livewire\Component;
use App\Models\Announcement;
use LivewireUI\Modal\ModalComponent;

class DeleteAnnouncement extends ModalComponent
{

    public Announcement $announcement;
    public function mount(Announcement $announcement)
    {
        $this->announcement = $announcement;
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public function deleteAnnouncement()
    {
        $this->announcement->delete();
        return redirect('admin/announcements')->with('message', 'Announcement deleted successfully.');
    }

    public function render()
    {
        return view('livewire.admin.announcement.delete-announcement');
    }
}
