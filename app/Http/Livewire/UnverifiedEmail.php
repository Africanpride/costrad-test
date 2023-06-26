<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UnverifiedEmail extends Component
{
    public User $user;

    public function mount () {
        $this->user = Auth::user();
    }

    public function sendEmailVerification()
    {
        $this->user->sendEmailVerificationNotification();

        $this->user->verificationLinkSent = true;
        app('flasher')->addSuccess('Email Verification Request Sent.', 'Success');
    }


    public function render()
    {
        return view('livewire.unverified-email');
    }
}
