<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Article;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

final class Articles extends Component
{
    use WithPagination;

    public int $perPage = 10;

    public function render(): View
    {
        return view('livewire.articles', [
            'articles' => Article::whereNotNull('published_at')
                ->latest()
                ->simplePaginate($this->perPage),
        ]);
    }
}
