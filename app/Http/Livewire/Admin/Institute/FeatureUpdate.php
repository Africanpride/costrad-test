<?php

namespace App\Http\Livewire\Admin\Institute;

use App\Models\Feature;
use Livewire\Component;
use App\Models\Institute;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class FeatureUpdate extends ModalComponent
{

    use WithFileUploads;

    public $title, $description;
    public Feature $feature;
    public Institute $institute;

    // public function mount(Feature $feature)
    // {
    //     $this->feature =$feature;
    // }

    public function mount(Institute $institute) {
        $this->institute = $institute;
    }

    public function AddFeature()
    {
        dd($this->institute->name);
        $validatedData = $this->validate([
            'title' => 'required|unique:features,title',
            'description' => 'nullable',
        ]);
        $this->institute->features()->create([
            'title' => $this->title,
            'description' => $this->description,
        ]);


        return redirect('admin/institutes')->with('message', 'Feature images updated successfully.');
    }



    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public function render()
    {
        return view('livewire.admin.institute.feature-update');
    }
}
