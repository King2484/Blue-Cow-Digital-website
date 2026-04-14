<?php

/**
 * Vercel entry point for Laravel.
 *
 * /var/task is read-only on Vercel. Everything Laravel needs to write
 * (storage, bootstrap/cache) is redirected to /tmp which IS writable.
 */

// ── 1. Storage / bootstrap paths ──────────────────────────────────────────
$_ENV['APP_STORAGE'] = '/tmp/storage';
putenv('APP_STORAGE=/tmp/storage');

$_ENV['APP_BOOTSTRAP_PATH'] = '/tmp/bootstrap';
putenv('APP_BOOTSTRAP_PATH=/tmp/bootstrap');

// ── 2. Create all required writable directories in /tmp ────────────────────
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

// ── 3. Seed /tmp/bootstrap/cache with pre-built cache files from repo ──────
$repoCache = __DIR__ . '/../bootstrap/cache';
foreach (glob($repoCache . '/*.php') as $file) {
    $dest = '/tmp/bootstrap/cache/' . basename($file);
    if (!file_exists($dest)) {
        copy($file, $dest);
    }
}

// ── 4. Temporary debug endpoint — remove after confirming assets load ──────
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
if ($uri === '/_fs_check') {
    header('Content-Type: application/json');
    echo json_encode([
        'api_dir'      => __DIR__,
        'public_dir'   => is_dir(__DIR__ . '/../public')              ? 'OK' : 'MISSING',
        'assets_dir'   => is_dir(__DIR__ . '/../public/assets')       ? 'OK' : 'MISSING',
        'css_dir'      => is_dir(__DIR__ . '/../public/assets/css')   ? 'OK' : 'MISSING',
        'style_css'    => is_file(__DIR__ . '/../public/assets/css/style.css') ? 'OK' : 'MISSING',
        'bcd_custom'   => is_file(__DIR__ . '/../public/assets/css/bcd-custom.css') ? 'OK' : 'MISSING',
    ]);
    exit;
}

// ── 5. Serve static files from public/ directly ───────────────────────────
// Vercel's static file routing can be unreliable with PHP runtimes.
// We serve all static assets through PHP to guarantee delivery.
$staticFile = __DIR__ . '/../public' . $uri;

if ($uri !== '/' && is_file($staticFile)) {
    $ext = strtolower(pathinfo($staticFile, PATHINFO_EXTENSION));
    $mimes = [
        'css'   => 'text/css; charset=utf-8',
        'js'    => 'application/javascript; charset=utf-8',
        'png'   => 'image/png',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'gif'   => 'image/gif',
        'svg'   => 'image/svg+xml',
        'ico'   => 'image/x-icon',
        'webp'  => 'image/webp',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',
        'eot'   => 'application/vnd.ms-fontobject',
        'otf'   => 'font/otf',
        'json'  => 'application/json',
        'txt'   => 'text/plain',
        'xml'   => 'application/xml',
        'map'   => 'application/json',
    ];
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext]);
    }
    // Cache static assets for 1 year at the edge
    header('Cache-Control: public, max-age=31536000, immutable');
    readfile($staticFile);
    exit;
}

// ── 5. Standard Laravel document root ─────────────────────────────────────
$_SERVER['DOCUMENT_ROOT']   = __DIR__ . '/../public';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

require __DIR__ . '/../public/index.php';
