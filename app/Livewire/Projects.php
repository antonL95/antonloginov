<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Projects extends Component
{
    public function render(): View
    {
        return view('livewire.projects', [
            'projects' => [
                [
                    'name' => 'Tensen',
                    'logo' => asset('assets/images/tensen_logo.png'),
                    'description' => __(
                        'AI spiritual companion and dream interpreter.',
                    ),
                    'link' => 'https://tensen.cz',
                    'link-label' => 'tensen.cz',
                ],
                [
                    'name' => 'Artist\'s hero',
                    'logo' => asset('assets/images/artistshero_logo.jpeg'),
                    'description' => __(
                        'Rent art for your office from local artists.',
                    ),
                    'link' => 'https://artistshero.com',
                    'link-label' => 'artistshero.com',
                ],
                [
                    'name' => 'Moneysky',
                    'logo' => asset('assets/images/moneysky.svg'),
                    'description' => __(
                        'Automate your finance tracking and stay informed with real-time updates.',
                    ),
                    'link' => 'https://moneysky.app',
                    'link-label' => 'moneysky.app',
                ],
                [
                    'name' => 'SatuHati',
                    'logo' => asset('assets/images/satuhati.png'),
                    'description' => __(
                        'Charity website for charity organization that operates in Indonesia',
                    ),
                    'link' => 'https://satuhaticharity.cz/',
                    'link-label' => 'satuhaticharity.cz',
                ],
            ],
        ]);
    }
}
