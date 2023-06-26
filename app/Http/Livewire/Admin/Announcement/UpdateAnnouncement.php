<?php

namespace App\Http\Livewire\Admin\Announcement;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;

class UpdateAnnouncement extends ModalComponent
{
    use WithFileUploads;

    public Announcement $announcement;

    public $title;
    public $body;
    public $icon;
    public $image;

    public function mount(Announcement $announcement)
    {

        $this->announcement = $announcement;
        $this->title = $announcement->title;
        $this->body = $announcement->body;
        // $this->image = $announcement->image;
        // $this->icon = $announcement->icon;
    }
    // protected $rules = [
    //     'title' => 'required|min:2|max:255',
    //     'body' => 'required|min:2',
    //     'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
    //     'icon' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:3048',
    // ];

    public function updateAnnouncement(Announcement $announcement)
    {
        // dd($this->announcement->icon);
        $validatedData = $this->validate([
            'title' => 'required|min:2|max:255',
            'body' => 'required|min:2',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'icon' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:3048| nullable',

        ]);
        // $validatedData = $this->validate();
        if ($this->image) {
            // if ($this->announcement->image) {
            //     if (strpos($this->announcement->image, "http") === false && strpos($this->announcement->image, "placeholder") === false) {
            //         Storage::delete('images/announcements/' . $this->announcement->image);
            //     }
                $imageName = $this->image->storeAs('images/announcements', rand(1, 20) . "." . $this->image->getClientOriginalExtension(), 'public');

                $validatedData['image'] = $imageName;
            }

        if ($this->icon) {

            $iconName = $this->icon->storeAs('icons/announcements', rand(1, 20) . "." . $this->icon->getClientOriginalExtension(), 'public');

            $validatedData['icon'] = $iconName;
        }

        if ($this->title) {
            $validatedData['slug'] = Str::slug($this->title);
        }



        $this->announcement->update(array_filter($validatedData));

        $this->closeModal();
        return redirect('admin/announcements')->with('message', 'Announcement updated successfully.');
    }

    public function render()
    {
        return view('livewire.admin.announcement.update-announcement');
    }
}
