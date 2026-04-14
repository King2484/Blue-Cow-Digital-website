<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
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

// On Vercel, /tmp is the only writable directory.
// useStoragePath() and useBootstrapPath() must be called on the Application
// instance AFTER ->create(). They update both the internal property AND the
// container binding, so ALL internal path methods resolve to /tmp correctly.

if ($storagePath = ($_ENV['APP_STORAGE'] ?? getenv('APP_STORAGE'))) {
    $app->useStoragePath($storagePath);
}

// useBootstrapPath() updates $this->bootstrapPath (the property used by
// getCachedServicesPath / normalizeCachePath) as well as path.bootstrap.
// This fixes ProviderRepository and PackageManifest both pointing at /tmp.
if ($bootstrapPath = ($_ENV['APP_BOOTSTRAP_PATH'] ?? getenv('APP_BOOTSTRAP_PATH'))) {
    $app->useBootstrapPath($bootstrapPath);
}

return $app;
