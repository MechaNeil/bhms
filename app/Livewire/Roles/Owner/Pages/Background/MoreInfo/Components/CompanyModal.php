<?php

namespace App\Livewire\Roles\Owner\Pages\Background\MoreInfo\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Company;

class CompanyModal extends Component
{
    use WithFileUploads;

    // Declare properties
    public $company_name;
    public $address;
    public $contact_no;
    public $website;
    public $company_logo;

    // Validation rules
    protected $rules = [
        'company_name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'contact_no' => 'required|string|max:15',
        'website' => 'required|url',
        'company_logo' => 'nullable|image|max:2048', // Optional file validation
    ];

    public function mount()
    {
        // Load existing company data (assuming one company)
        $company = Company::first();
        if ($company) {
            $this->company_name = $company->company_name;
            $this->address = $company->address;
            $this->contact_no = $company->contact_no;
            $this->website = $company->website;
        }
    }

    public function save()
    {
        // Validate input data
        $this->validate();

        // Retrieve or create a Company instance
        $company = Company::firstOrNew();

        // Assign data
        $company->company_name = $this->company_name;
        $company->address = $this->address;
        $company->contact_no = $this->contact_no;
        $company->website = $this->website;

        if ($this->company_logo) {
            $company->company_logo = $this->company_logo->store('logos', 'public');
            $company->save();
        }
        // Handle file upload if provided
        // if ($this->company_logo) {
        //     $path = $this->company_logo->store('company_logos', 'public');
        //     $company->company_logo = $path;
        // }

        // Save the company data
        $company->save();
        $this->dispatch('companySaved', 'Company information saved successfully!');
        
        $this->dispatch('closeModal');

        // Optional: Add feedback or redirect
    }

    public function render()
    {
        return view('livewire.roles.owner.pages.background.more-info.components.company-modal');
    }
}
