<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;
use Sentry\Laravel\Integration;

Schedule::call(function () {
    Log::error('here!');
})->everyTwoMinutes();
