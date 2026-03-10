<?php

/**
 * Lograva Studio - Database Patch Utility
 * 
 * This script allows running migrations and seeders via browser.
 * Use this only for initial setup or updates on shared hosting.
 * WARNING: For security, delete this file after use or protect it.
 */

// Define the absolute path to the front controller
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Ensure we are working from the project root
chdir(FCPATH . '..');

// Load the paths config
require FCPATH . '../app/Config/Paths.php';
$paths = new Config\Paths();

// Load the framework bootstrapper
require $paths->systemDirectory . '/Boot.php';

use CodeIgniter\Boot;
use Config\Services;

// bootWorker initializes everything but doesn't run the request loop
// This is safe to use in a web context to access services
$app = Boot::bootWorker($paths);

echo "<h1>Lograva Studio DB Patch</h1>";
echo "<pre>";

try {
    // 1. Run Migrations
    echo "Running Migrations...\n";
    $migrate = Services::migrations();
    
    // Attempt to migrate to the latest version
    if ($migrate->latest()) {
        echo "Success: Migrations updated to latest version.\n";
    } else {
        echo "Notice: No new migrations found.\n";
    }

    echo "\n-----------------------------------\n\n";

    // 2. Run Seeders
    echo "Running Initial Seeder...\n";
    $seeder = new \CodeIgniter\Database\Seeder(new \Config\Database());
    $seeder->call('App\Database\Seeds\InitialSeeder');
    echo "Success: Database seeded with initial data.\n";

    echo "\n-----------------------------------\n\n";
    echo "<strong>All operations completed successfully.</strong>";

} catch (\Throwable $e) {
    echo "<strong>Error:</strong> " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . " on line " . $e->getLine() . "\n";
}

echo "</pre>";
echo "<p><a href='/'>Go to Website</a> | <a href='/admin/login'>Admin Login</a></p>";

echo "</pre>";
echo "<p><a href='/'>Go to Website</a> | <a href='/admin/login'>Admin Login</a></p>";
