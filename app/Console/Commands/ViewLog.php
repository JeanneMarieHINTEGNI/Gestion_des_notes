<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class ViewLog extends Command
{
    protected $signature = 'log:view';
    protected $description = 'Afficher les dernières lignes du log';

    public function handle()
    {
        $file = storage_path('logs/laravel.log');
        if (file_exists($file)) {
            $logs = file($file);
            $this->info(implode("", array_slice($logs, -20))); // Affiche les 20 dernières lignes
        } else {
            $this->error('Le fichier de log est introuvable.');
        }
    }
};

