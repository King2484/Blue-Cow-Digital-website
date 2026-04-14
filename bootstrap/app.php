<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\PackageManifest;
use Illuminate\Filesystem\Filesystem;

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
// useStoragePath() must be called on the Application instance (after ->create()).

if ($storagePath = ($_ENV['APP_STORAGE'] ?? getenv('APP_STORAGE'))) {
    $app->useStoragePath($storagePath);
}

// bootstrap/cache is read-only on Vercel — rebind PackageManifest and
// path.bootstrap so all cache writes go to /tmp/bootstrap/cache instead.
if ($bootstrapPath = ($_ENV['APP_BOOTSTRAP_PATH'] ?? getenv('APP_BOOTSTRAP_PATH'))) {
    $app->instance('path.bootstrap', $bootstrapPath);

    $app->instance(PackageManifest::class, new PackageManifest(
        new Filesystem,
        $app->basePath(),
        $bootstrapPath . '/cache/packages.php'
    ));
}

return $app;
