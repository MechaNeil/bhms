<?php

namespace App\Livewire\Home;
use Livewire\Attributes\Layout;

use Livewire\Component;


class Homepage extends Component
{
    #[Layout('components.layouts.home')] 
    public function render()
    {
        return view('livewire.home.homepage');
    }
}
