<?php

namespace App\Http\Livewire\Admin\Institute;

use Livewire\Component;
use App\Models\Institute;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;


class AddInstitute extends ModalComponent
{
    use WithFileUploads;

    public $name, $acronym, $overview, $introduction, $about, $icon, $logo, $banner, $startDate, $endDate, $seo,  $slug, $price;
    public bool $active = true;
    public $instituteId;
    public $isOpen = 0;

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function store()
    {

        // dd('this is storing Institute');

        $validatedData = $this->validate([
            'name' => 'required|min:2|unique:institutes,name',
            'acronym' => 'required|min:2|unique:institutes,acronym',
            'overview' => 'required|min:2',
            'introduction' => 'required|min:2',
            'about' => 'required|min:2',
            'icon' => 'nullable',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
            'startDate' => 'required',
            'endDate' => 'required',
            'seo' => 'nullable',
            'active' => 'nullable',
            'slug' => 'nullable',
            'price' => 'required',
        ]);


        if ($this->logo) {

            // if ($this->institute->logo) {
            //     Storage::delete('images/logos/' . $this->institute->logo);
            // }
            $logoName = $this->logo->storeAs('images/logos', $this->acronym . "." . $this->logo->getClientOriginalExtension(), 'public');

            $validatedData['logo'] = $logoName;
        }


        if ($this->banner) {

            // if ($this->institute->banner) {
            //     Storage::delete('images/banners/' . $this->institute->banner);
            // }

            $bannerName = $this->banner->storeAs('images/banners', $this->acronym . "." . $this->banner->getClientOriginalExtension(), 'public');

            $validatedData['banner'] = $bannerName;
        }

        if ($this->name) {
            $validatedData['slug'] = Str::slug($this->name);
        }

        // dd($validatedData);

        Institute::create($validatedData);

        return redirect('admin/institutes')->with('message', 'Institute created successfully.');
    }

    public function edit($id)
    {
        dd('this is editing Institute');

        $institute = Institute::findOrFail($id);
        $this->instituteId = $id;
        $this->name = $institute->name;
        $this->acronym = $institute->acronym;
        $this->overview = $institute->overview;
        $this->introduction = $institute->introduction;
        $this->about = $institute->about;
        $this->icon = $institute->icon;
        $this->logo = $institute->logo;
        $this->banner = $institute->banner;
        $this->startDate = $institute->startDate;
        $this->endDate = $institute->endDate;
        $this->seo = $institute->seo;
        $this->active = $institute->active;
        $this->slug = $institute->slug;
        $this->price = $institute->price;
        $this->openModal();
    }

    public function update(Institute $institute)
    {
        $validatedData = $this->validate([
            'name' => 'required|min:2|unique:institutes,name, $institute->id',
            'acronym' => 'required|min:2|unique:institutes,acronym, $institute->id',
            'overview' => 'required|min:2',
            'introduction' => 'required|min:2',
            'about' => 'required|min:2',
            'icon' => 'nullable',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
            'startDate' => 'required',
            'endDate' => 'required',
            'seo' => 'nullable',
            'active' => 'nullable',
            'slug' => 'nullable',
            'price' => 'required',
        ]);

        $institute->update($validatedData);

        session()->flash('message', 'Institute updated successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Institute::find($id)->delete();
        session()->flash('message', 'Institute deleted successfully.');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->acronym = '';
        $this->overview = '';
        $this->introduction = '';
        $this->about = '';
        $this->icon = '';
        $this->logo = '';
        $this->banner = '';
        $this->startDate = '';
        $this->endDate = '';
        $this->seo = '';
        $this->active = '';
        $this->slug = '';
        $this->price = '';
    }

    // public function closeModal()
    // {
    //     $this->isOpen = false;
    // }

    // public function openModal()
    // {
    //     $this->isOpen = true;
    // }


    public function images(Institute $institute)
    {

        $validatedData = $this->validate([
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
        ]);

        if ($this->logo) {

            if ($institute->logo) {
                Storage::delete('/images/logo/' . $institute->logo);
            }
            $logoName = $this->logo->store("images/logo/", 'public');
            $validatedData['logo'] = $logoName;
        }

        if ($this->banner) {

            if ($institute->banner) {
                Storage::delete('/images/banner/' . $institute->banner);
            }
            $bannerName = $this->banner->store("/images/banner/", 'public');
            $validatedData['banner'] = $bannerName;
        }

        $institute->update($validatedData);

        return redirect('admin/institutes')->with('message', 'Institute images updated successfully.');
    }


    public function render()
    {
        return view('livewire.admin.institute.add-institute');
    }
}
