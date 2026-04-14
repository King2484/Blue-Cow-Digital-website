<?php

/**
 * Vercel entry point for Laravel.
 *
 * /var/task is read-only on Vercel. Everything Laravel needs to write
 * (storage, bootstrap/cache) is redirected to /tmp which IS writable.
 */

// ── 1. Storage path ────────────────────────────────────────────────────────
$_ENV['APP_STORAGE'] = '/tmp/storage';
putenv('APP_STORAGE=/tmp/storage');

// ── 2. Bootstrap cache path ────────────────────────────────────────────────
$_ENV['APP_BOOTSTRAP_PATH'] = '/tmp/bootstrap';
putenv('APP_BOOTSTRAP_PATH=/tmp/bootstrap');

// ── 3. Create all required writable directories in /tmp ────────────────────
$dirs = [
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// ── 4. Seed /tmp/bootstrap/cache with any pre-built cache files from repo ──
//      (packages.php / services.php committed locally so Laravel doesn't
//       need to regenerate them on the first cold start)
$repoCache = __DIR__ . '/../bootstrap/cache';
foreach (glob($repoCache . '/*.php') as $file) {
    $dest = '/tmp/bootstrap/cache/' . basename($file);
    if (!file_exists($dest)) {
        copy($file, $dest);
    }
}

// ── 5. Standard Laravel document root ─────────────────────────────────────
$_SERVER['DOCUMENT_ROOT']   = __DIR__ . '/../public';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

require __DIR__ . '/../public/index.php';
