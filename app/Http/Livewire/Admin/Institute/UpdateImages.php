<?php

namespace App\Http\Livewire\Admin\Institute;

use Livewire\Component;
use App\Models\Institute;
use Livewire\WithFileUploads;
use Illuminate\Auth\Access\Gate;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;

class UpdateImages extends ModalComponent
{
    use WithFileUploads;

    public $logo, $banner = [];
    public Institute $institute;

    public function mount(Institute $institute)
    {
        $this->institute = $institute;
    }

    public function InstituteImages()
    {
        // dd($this->banner);
        // dd($this->institute->slug);

        $validatedData = $this->validate([
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'banner.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
        ]);



        if ($this->logo) {

            if ($this->institute->logo) {
                Storage::delete('images/logos/' . $this->institute->logo);
            }
            $logoName = $this->logo->storeAs('images/logos', $this->institute->acronym . "." . $this->logo->getClientOriginalExtension(), 'public');

            $validatedData['logo'] = $logoName;
        }


        if ($this->banner) {

            foreach($this->banner as $image) {
                $this->institute->addMedia($image)->toMediaCollection('banner');
            }
        }

        // dd($validatedData);
        $this->institute->update(array_filter($validatedData));

        return redirect('admin/institutes')->with('message', 'Institute images updated successfully.');
    }



    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function render()
    {
        return view('livewire.admin.institute.update-images');
    }
}
