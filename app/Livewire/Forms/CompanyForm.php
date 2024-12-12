<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CompanyForm extends Form
{
    //
    #[Validate('required')]
    public $company_name;

    #[Validate('required')]
    public $address;

    #[Validate('required')]
    public $contact_no;

    #[Validate('required')]
    public $website;

    #[Validate('required')]
    public $company_logo;

    public function store() {
        $this->validate();
        
    }


}
