<?php

declare(strict_types=1);

use App\Livewire\Articles;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Articles::class)
        ->assertStatus(200);
});
