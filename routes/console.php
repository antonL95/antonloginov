<?php

declare(strict_types=1);

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

Artisan::command('inspire', function () {
    Log::info(Inspiring::quote());
})->purpose('Display an inspiring quote')->everyMinute();
