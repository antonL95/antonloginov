<?php

declare(strict_types=1);

use App\Livewire\Home;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Home::class)
        ->assertStatus(200);
});
