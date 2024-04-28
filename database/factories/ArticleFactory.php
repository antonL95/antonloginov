<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => $this->faker->words(random_int(3, 5), true),
            'slug' => $this->faker->slug(),
            'subtitle' => null,
            'content' => $this->faker->paragraphs(10, true),
            'published_at' => Carbon::now(),
        ];
    }
}
