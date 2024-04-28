<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

final class Home extends Component
{
    /**
     * @return array{
     *     roles: \Illuminate\Support\Collection<int, array{company: string, title: string, start: string, end: string, logo: string}>,
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
                'logo' => asset('assets/img/gamee_logo.jpeg'),
            ],
            [
                'company' => 'Internet-handel',
                'title' => 'Full-stack developer & Team lead',
                'start' => '2015',
                'end' => '2021',
                'logo' => asset('assets/img/ih_logo.png'),
            ],
        ]);

        return [
            'roles' => $roles,
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
