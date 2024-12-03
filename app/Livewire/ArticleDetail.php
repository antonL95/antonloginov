<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ArticleDetail extends Component
{
    public Article $article;

    public function mount(string $slug): void
    {
        $this->article = Article::where('slug', $slug)->firstOrFail();
    }

    public function render(): View
    {
        return view('livewire.article-detail')
            ->title($this->article->title);
    }
}
