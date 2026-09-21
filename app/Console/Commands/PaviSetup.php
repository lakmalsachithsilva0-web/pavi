<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Exception;

class PaviSetup extends Command
{
    protected $signature = 'pavi:setup {--fresh : Drop all tables and re-run migrations + seeders}';

    protected $description = 'Auto create database (if not exists), run migrations and seeders for Pavi Creations local setup';

    public function handle()
    {
        $this->info('========================================');
        $this->info('  Pavi Creations - Local Setup Script');
        $this->info('========================================');
        $this->newLine();

        // 1. Create database if it does not exist
        $this->createDatabaseIfNotExists();

        // 2. Run migrations
        if ($this->option('fresh')) {
            $this->warn('Running fresh migrations (all data will be lost)...');
            Artisan::call('migrate:fresh', ['--force' => true], $this->getOutput());
        } else {
            $this->info('Running migrations...');
            Artisan::call('migrate', ['--force' => true], $this->getOutput());
        }

        // 3. Run seeders
        $this->info('Running seeders...');
        Artisan::call('db:seed', ['--force' => true], $this->getOutput());

        // 4. Create storage link
        $this->info('Creating storage link...');
        try {
            Artisan::call('storage:link', [], $this->getOutput());
        } catch (Exception $e) {
            $this->warn('Storage link may already exist.');
        }

        $this->newLine();
        $this->info('✅ Setup completed successfully!');
        $this->newLine();
        $this->info('Admin Login Details:');
        $this->line('  Email    : lakmalsachithsilva0@gmail.com');
        $this->line('  Password : Ux3@f=7x2');
        $this->newLine();
        $this->info('Start the server with:  php artisan serve');
        $this->info('Frontend : http://localhost:8000');
        $this->info('Admin    : http://localhost:8000/panel');
        $this->newLine();

        return Command::SUCCESS;
    }

    protected function createDatabaseIfNotExists()
    {
        $database = config('database.connections.mysql.database');
        $host     = config('database.connections.mysql.host');
        $port     = config('database.connections.mysql.port');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');

        $this->info("Checking database: {$database}");

        try {
            // Connect without selecting a database
            $pdo = new \PDO(
                "mysql:host={$host};port={$port}",
                $username,
                $password,
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
            );

            $pdo->exec("CREATE DATABASE IF NOT EXISTS `{$database}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
            $this->info("Database '{$database}' is ready.");
        } catch (Exception $e) {
            $this->error('Could not create database: ' . $e->getMessage());
            $this->warn('Please create the database manually and try again.');
            return;
        }
    }
}
