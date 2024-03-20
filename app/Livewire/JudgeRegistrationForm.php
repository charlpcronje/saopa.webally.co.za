<?php

namespace App\Http\Livewire\Judges;

use Livewire\Component;
use App\Models\Judge;

class JudgeRegistrationForm extends Component
{
    public $email;
    public $password;
    public $confirmPassword;
    public $firstName;
    public $surname;
    public $company;
    public $workPhone;
    public $faxNumber;
    public $mobileNumber;

    protected $rules = [
        'email' => 'required|email|unique:judges',
        'password' => 'required|min:8',
        'confirmPassword' => 'required|same:password',
        'firstName' => 'required',
        'surname' => 'required',
        'company' => 'required',
        'workPhone' => 'required|numeric',
        'faxNumber' => 'nullable|numeric',
        'mobileNumber' => 'required|numeric',
    ];

    public function render()
    {
        return view('livewire.judges.judge-registration-form');
    }

    public function submit()
    {
        $this->validate();

        // Create the judge record
        $judge = Judge::create([
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'first_name' => $this->firstName,
            'surname' => $this->surname,
            'company' => $this->company,
            'work_phone' => $this->workPhone,
            'fax_number' => $this->faxNumber,
            'mobile_number' => $this->mobileNumber,
        ]);

        // Redirect or show success message
        session()->flash('success', 'Judge registered successfully.');
        $this->reset();
    }
}