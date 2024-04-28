<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Projects extends Component
{
    public function render(): View
    {
        return view('livewire.projects', [
            'projects' => [
                [
                    'name' => 'Moneysky',
                    'logo' => asset('assets/img/moneysky.svg'),
                    'description' => __(
                        'Automate your finance tracking and stay informed with real-time updates.',
                    ),
                    'link' => 'https://moneysky.app',
                    'link-label' => 'moneysky.app',
                ],
                [
                    'name' => 'Artist\'s hero',
                    'logo' => asset('assets/img/artistshero_logo.jpeg'),
                    'description' => __(
                        'Rent art for your office from local artists',
                    ),
                    'link' => 'https://artistshero.com',
                    'link-label' => 'artistshero.com',
                ],
            ],
        ]);
    }
}
