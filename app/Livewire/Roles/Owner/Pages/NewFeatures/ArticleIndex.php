<?php

namespace App\Livewire\Roles\Owner\Pages\NewFeatures;

use Livewire\Component;
use App\Models\Article;

class ArticleIndex extends Component
{

    public function render()
    {
        // Iterating Over Collections every time there are update made to this particular component
        return view('livewire.roles.owner.pages.new-features.article-index', [
            'articles' => Article::all(),
        ]);
    }
}
