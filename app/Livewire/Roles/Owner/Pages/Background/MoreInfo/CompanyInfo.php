<?php

namespace App\Livewire\Roles\Owner\Pages\Background\MoreInfo;

use App\Models\Company;
use Livewire\Component;

class CompanyInfo extends Component
{
    public $company; // Holds the company data
    public $company_name;
    public $address;
    public $contact_no;
    public $website;

    public function mount()
    {
        // Load the company data when the component mounts
        $this->company = Company::first(); // Assuming there's one company
        if ($this->company) {
            $this->company_name = $this->company->company_name;
            $this->address = $this->company->address;
            $this->contact_no = $this->company->contact_no;
            $this->website = $this->company->website;
        }
    }


    public function render()
    {
        return view('livewire.roles.owner.pages.background.more-info.company-info');
    }
}
