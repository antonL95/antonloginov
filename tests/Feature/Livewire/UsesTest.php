<?php

declare(strict_types=1);

use App\Livewire\Uses;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Uses::class)
        ->assertStatus(200);
});
