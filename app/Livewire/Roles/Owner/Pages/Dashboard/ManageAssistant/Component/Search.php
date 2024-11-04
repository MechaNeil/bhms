<?php

namespace App\Livewire\Roles\Owner\Pages\Dashboard\ManageAssistant\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Article;

class Search extends Component
{
    #[Validate('required')]
    public $searchText = '';
    public $results = [];
    public $placeholder;

    public function updatedSearchText($value) {
        $this->reset('results');
        $this->validate();
        $searchTerm = "%{$value}%";
        $this-> results = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    #[On('search:clear-results')]
    public function clear() {
        $this->reset('results', 'searchText');
    }

    public function render()
    {
        return view('livewire.roles.owner.pages.dashboard.manage-assistant.component.search');
    }
}
