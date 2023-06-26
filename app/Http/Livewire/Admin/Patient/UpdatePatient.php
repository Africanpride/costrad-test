<?php

namespace App\Http\Livewire\Admin\Patient;

use App\Models\Patient;
use App\Models\Insurance;
use DateTime;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Slideover\SlideoverComponent;

class UpdatePatient extends SlideoverComponent
{
    use WithFileUploads;

    public $titleOptions = ['Mr', 'Ms', 'Mrs', 'Dr'];
    public $genderOptions = ['Male', 'Female'];
    public $insuranceOptions;
    public $searchInsurance = '';
    public $title = '';
    public $gender;
    public ?string $dateOfBirth;
    public $firstName;
    public $lastName;
    public $email;
    public $address_1;
    public $address_2;
    public $city;
    public $state;
    public $zipcode;
    public $country;
    public $telephone;
    public $emergencyContactName;
    public $emergencyContactTelephone;
    public $nationality;
    public ?int $insurance_id = 0;
    public $insuranceNumber;
    public ?bool $insured = false;
    public ?bool $active = false;
    public $avatar;

    public Patient $patient;
    // protected $listeners = ['toggleActive'];

    public function mount(Patient $patient)
    {
        $this->patient = $patient;
        $this->title = $patient->title;
        $this->gender = $patient->gender;
        $this->dateOfBirth = $patient->dateOfBirth;
        $this->firstName = $patient->firstName;
        $this->lastName = $patient->lastName;
        $this->email = $patient->email;
        $this->address_1 = $patient->address_1;
        $this->address_2 = $patient->address_2;
        $this->city = $patient->city;
        $this->state = $patient->state;
        $this->country = $patient->country;
        $this->zipcode = $patient->zipcode;
        $this->telephone = $patient->telephone;
        $this->emergencyContactName = $patient->emergencyContactName;
        $this->emergencyContactTelephone = $patient->emergencyContactTelephone;
        $this->nationality = $patient->nationality;
        $this->insuranceNumber = $patient->insuranceNumber;
        $this->insurance_id = $patient->insurance_id;
        $this->active = $patient->active;
        $this->insured = $patient->insured;
        $this->insuranceOptions = Insurance::whereLike(['name'], $this->searchInsurance)->get();
    }


    public function updatePatient()
    {
        $data = $this->validate([
            'title' => 'nullable|string|min:1|max:25',
            'gender' => 'nullable|string|min:1|max:255',
            'dateOfBirth' => 'required|date|min:1|max:255',
            'firstName' => 'required|string|min:2|max:255',
            'lastName' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255|unique:patients,email,' . $this->patient->id,
            'address_1' => 'nullable|string|min:2|max:255',
            'address_2' => 'nullable|string|min:2|max:255',
            'city' => 'nullable|string|min:2|max:255',
            'state' => 'nullable|string|min:2|max:255',
            'zipcode' => 'nullable|string|min:2|max:255',
            'country' => 'nullable|string|min:2|max:255',
            'telephone' => 'nullable|string|min:2|max:255',
            'emergencyContactName' => 'nullable|string|min:3|max:255',
            'emergencyContactTelephone' => 'nullable|string|min:3|max:255',
            'nationality' => 'nullable|string|min:1|max:255',
            'insurance_id' => 'nullable|min:1|max:255',
            'insuranceNumber' => 'nullable|string|min:1|max:255',
            'insured' => 'required|boolean',
            'active' => 'required|boolean',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:1024',

        ]);


        if (!is_null($this->avatar)) {
            $imageName = $this->avatar->store("avatar", 'public');
            $data['avatar'] = $imageName;
        }

        $this->patient->update(array_filter($data));

// dd($this->insured);
        $this->patient->forceFill([
            'insured' => $this->insured,
            'dateOfBirth' => $this->dateOfBirth,
            'insurance_id' => $this->checkInsuranceIDExists()
        ])->save();

        return redirect()->to('patients');
    }

    public function checkInsuranceIDExists () : int
     {
        if(empty($this->insured)) {
            return $this->insurance_id = 0;
        }
        return $this->insurance_id;
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function render()
    {
        return view('livewire.admin.patient.update-patient');
    }
}
