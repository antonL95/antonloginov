<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        return [
            'created_at' => \Illuminate\Support\Facades\Date::now(),
            'updated_at' => \Illuminate\Support\Facades\Date::now(),
            'title' => fake()->words(random_int(3, 5), true),
            'slug' => fake()->slug(),
            'subtitle' => null,
            'content' => fake()->paragraphs(10, true),
            'published_at' => \Illuminate\Support\Facades\Date::now(),
        ];
    }
}
