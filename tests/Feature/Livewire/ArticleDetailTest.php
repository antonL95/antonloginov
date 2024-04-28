<?php

declare(strict_types=1);

use App\Livewire\ArticleDetail;
use App\Models\Article;
use Livewire\Livewire;

it('renders successfully', function () {
    $article = Article::factory()->create();
    Livewire::test(ArticleDetail::class, ['slug' => $article->slug])
        ->assertStatus(200);
});
