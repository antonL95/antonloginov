<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Vite;
use Livewire\Component;

final class Home extends Component
{
    /**
     * @return array{
     *     roles: \Illuminate\Support\Collection<int, array{company: string, title: string, start: string, end: string, logo: string}>,
     *     projects: \Illuminate\Support\Collection<int, array{name: string, logo: string, description: array<int, mixed>|string, link: string, link-label: string}>,
     *     articles: Collection<int, Article>
     *}
     */
    public function with(): array
    {
        $roles = collect([
            [
                'company' => 'Gamee',
                'title' => 'Senior backend developer',
                'start' => '2021',
                'end' => 'present',
                'logo' => Vite::asset('resources/images/gamee_logo.jpeg'),
            ],
            [
                'company' => 'Internet-handel',
                'title' => 'Full-stack developer & Team lead',
                'start' => '2015',
                'end' => '2021',
                'logo' => Vite::asset('resources/images/ih_logo.png'),
            ],
        ]);

        $projects = collect([
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
        ]);

        return [ // @phpstan-ignore-line
            'roles' => $roles,
            'projects' => $projects,
            'articles' => Article::whereNotNull('published_at')
                ->latest('published_at')
                ->limit(3)
                ->get(),
        ];
    }


    public function render(): View
    {
        return view('livewire.home', $this->with());
    }
}
