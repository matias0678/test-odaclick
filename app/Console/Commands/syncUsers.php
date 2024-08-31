<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\UsuarioController;

class syncUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa usuarios de la api a la bd';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $controller = new UsuarioController();
        $controller->syncUsers();
        $this->info('Los usuarios se han sincronizado correctamente.');
    }
}
