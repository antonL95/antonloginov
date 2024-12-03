<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;
use Livewire\Component;

final class Projects extends Component
{
    public function render(): View
    {
        return view('livewire.projects', [
            'projects' => [
                [
                    'name' => 'Moneysky',
                    'logo' => Vite::asset('resources/images/moneysky.svg'),
                    'description' => __(
                        'Automate your finance tracking and stay informed with real-time updates.',
                    ),
                    'link' => 'https://moneysky.app',
                    'link-label' => 'moneysky.app',
                ],
                [
                    'name' => 'Artist\'s hero',
                    'logo' => Vite::asset('resources/images/artistshero_logo.jpeg'),
                    'description' => __(
                        'Rent art for your office from local artists.',
                    ),
                    'link' => 'https://artistshero.com',
                    'link-label' => 'artistshero.com',
                ],
                [
                    'name' => 'Tensen',
                    'logo' => Vite::asset('resources/images/tensen_logo.png'),
                    'description' => __(
                        'AI spiritual companion and dream interpreter.',
                    ),
                    'link' => 'https://tensen.cz',
                    'link-label' => 'tensen.cz',
                ],
            ],
        ]);
    }
}
