<?php

namespace App\Livewire\Entries;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Entry;

class BuildingEntryForm extends Component
{
    use WithFileUploads;

    public $firstName;
    public $surname;
    public $company;
    public $phoneNumber;
    public $email;
    public $entryTitle;
    public $projectCategory;
    public $ownerClientCompany;
    public $developerName;
    public $completionDate;
    public $capitalInvestment;
    public $economicReturn;
    public $streetAddress;
    public $architecturalDrawings;
    public $generalImages;
    public $otherImages;
    public $beforeImages;
    public $beeStatus;
    public $tenantProfile;
    public $overallImpact;
    public $designConcept;
    public $tenantConvenience;
    public $functionality;
    public $facilities;
    public $environmentalSustainability;
    public $socialTransformation;

    protected $rules = [
        'firstName' => 'required',
        'surname' => 'required',
        'company' => 'required',
        'phoneNumber' => 'required|numeric',
        'email' => 'required|email',
        'entryTitle' => 'required',
        'projectCategory' => 'required',
        'ownerClientCompany' => 'required',
        'developerName' => 'required',
        'completionDate' => 'required|date',
        'capitalInvestment' => 'required|numeric',
        'economicReturn' => 'required|numeric',
        'streetAddress' => 'required',
        'architecturalDrawings' => 'required|mimes:pdf,dwg|max:10240',
        'generalImages' => 'required|image|max:5120',
        'otherImages.*' => 'nullable|image|max:5120',
        'beforeImages.*' => 'nullable|image|max:5120',
        'beeStatus' => 'required|mimes:pdf|max:5120',
        'tenantProfile' => 'required|mimes:pdf|max:5120',
        'overallImpact' => 'required',
        'designConcept' => 'required',
        'tenantConvenience' => 'required',
        'functionality' => 'required',
        'facilities' => 'required',
        'environmentalSustainability' => 'required',
        'socialTransformation' => 'required',
    ];

    public function render()
    {
        return view('livewire.entries.building-entry-form');
    }

    public function submit()
    {
        $this->validate();

        // Process and store the entry data
        $entry = Entry::create([
            'first_name' => $this->firstName,
            'surname' => $this->surname,
            'company' => $this->company,
            'phone_number' => $this->phoneNumber,
            'email' => $this->email,
            'entry_title' => $this->entryTitle,
            'project_category' => $this->projectCategory,
            'owner_client_company' => $this->ownerClientCompany,
            'developer_name' => $this->developerName,
            'completion_date' => $this->completionDate,
            'capital_investment' => $this->capitalInvestment,
            'economic_return' => $this->economicReturn,
            'street_address' => $this->streetAddress,
            'overall_impact' => $this->overallImpact,
            'design_concept' => $this->designConcept,
            'tenant_convenience' => $this->tenantConvenience,
            'functionality' => $this->functionality,
            'facilities' => $this->facilities,
            'environmental_sustainability' => $this->environmentalSustainability,
            'social_transformation' => $this->socialTransformation,
        ]);

        // Process and store the uploaded files
        $this->architecturalDrawings->store('architectural-drawings', 'public');
        $this->generalImages->store('general-images', 'public');
        $this->otherImages->store('other-images', 'public');
        $this->beforeImages->store('before-images', 'public');
        $this->beeStatus->store('bee-status', 'public');
        $this->tenantProfile->store('tenant-profile', 'public');

        // Redirect or show success message
        session()->flash('success', 'Building entry submitted successfully.');
        $this->reset();
    }
}