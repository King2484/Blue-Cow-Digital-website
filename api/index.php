<?php

/**
 * Vercel entry point for Laravel.
 *
 * Overrides server variables so Laravel's router and
 * asset helpers resolve correctly in the serverless environment,
 * then bootstraps the standard public/index.php.
 */

// Allow Laravel to write compiled views and sessions to /tmp
// (the only writable directory on Vercel's serverless runtime)
$_ENV['APP_STORAGE'] = '/tmp';
putenv('APP_STORAGE=/tmp');

// Point PHP at the real document root
$_SERVER['DOCUMENT_ROOT']   = __DIR__ . '/../public';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

require __DIR__ . '/../public/index.php';
