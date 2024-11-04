<?php

namespace App\Livewire\Roles\Owner\Pages\Dashboard\ManageAssistant\Component;

use Livewire\Attributes\Reactive; 
use Livewire\Component;

class SearchResults extends Component
{
    #[Reactive]
    public $results = [];

    #[Reactive]
    public $show = [];


    public function render()
    {
        return view('livewire.roles.owner.pages.dashboard.manage-assistant.component.search-results');
    }
}
