<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilePhoto extends Component
{
    use WithFileUploads;

    public $photo;
    // public $profilePhotoPath;
    public User $user;

    public function mount(User $user)
    {
        $this->user = Auth::user();
        // $this->profilePhotoPath = $user->profile_photo_path;
    }

    public function render()
    {
        return view('livewire.profile-photo');
    }

    public function updatedPhoto()
    {

        $this->validate([
            'photo' => 'image|max:1024', // Add any additional validation rules as needed
        ]);
    }

    public function removeProfilePhoto()
    {
        $this->user->deleteProfilePhoto();
        return redirect()->route('profile.show');
    }

    public function save()
    {
        $this->user->deleteProfilePhoto();
        $this->user->updateProfilePhoto($this->photo);
        return redirect()->route('profile.show');
    }
}
