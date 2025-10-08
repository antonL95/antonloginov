<?php

declare(strict_types=1);

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state ?? '')))
                    ->required(),
                TextInput::make('subtitle'),
                TextInput::make('slug')
                    ->readOnly(),
                RichEditor::make('content')
                    ->required()
                    ->json()
                    ->columnSpanFull(),
                DateTimePicker::make('published_at'),
            ]);
    }
}
