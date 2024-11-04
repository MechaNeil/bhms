<?php

namespace App\Livewire\Roles\Owner\Pages\Dashboard\ManageAssistant;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Greeting;

class Assistants extends Component
{

    public function render()
    {
        return view('livewire.roles.owner.pages.dashboard.manage-assistant.assistants');
    }
}
