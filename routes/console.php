<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Artisan;
use Sentry\Laravel\Integration;

Artisan::command('inspire', function () {
    Integration::captureUnhandledException(new \Exception('This is an inspiration message.'));
})->everyTwoMinutes();
