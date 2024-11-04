<?php

namespace App\Livewire\Roles\Owner\Pages\Dashboard\ManageAssistant;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Greeting;

class Assistants extends Component
{
    #[Validate('required|min:2')]
    public $name = '';
    public $greeting = '';
    
    public $greetings = [];
    public $greetingMessage = '';

    

    public function changeGreeting() {
        $this->reset('greetingMessage');
        
        $this->validate();

    
        $this->greetingMessage = "{$this->greeting}, {$this->name}!";
        
    }

    // the mount hook is use for anything you want to inizialize to your component
    // loading data in the database is the perfect example

    public function mount() {
        $this->greetings = Greeting::all();
    }
    // public function updated($property, $value) {
    //     $this->name = strtolower($value);

    // }
    // updated hook exucutes whenevery the property is updated
    public function updatedName($value){
        $this->name = strtolower($value);

    }




    public function render()
    {
        return view('livewire.roles.owner.pages.dashboard.manage-assistant.assistants');
    }
}
