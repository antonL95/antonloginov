<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'slug',
        'published_at',
    ];

    /**
     * @return string[]
     */
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }
}
