<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    throw new \Exception('This is an inspiration message.');
})->everyMinute();
