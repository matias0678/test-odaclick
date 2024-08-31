<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Http\Controllers\UsuarioController;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::call(function(){
     // Crear una instancia del controlador
     $usuarioController = new UsuarioController();

     // Llamar al método syncUsers
     $usuarioController->syncUsers();

})->everyMinute();