<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__));

// On Vercel, /tmp is the only writable directory.
// Redirect all storage paths there so views, sessions and logs work.
if (isset($_ENV['APP_STORAGE']) || getenv('APP_STORAGE')) {
    $storagePath = $_ENV['APP_STORAGE'] ?? getenv('APP_STORAGE');
    $app->useStoragePath($storagePath);
}

return $app
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
