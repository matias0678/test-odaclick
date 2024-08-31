<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function syncUsers()
    {   
        //obtengo datos de usuarios del endpoint
        $response = Http::get('https://random-data-api.com/api/v2/users?size=100');
        //extraigo datos del body
        $users = json_decode($response->body(), true);

        //recorro los datos y creo los usuarios o actualizo si ya existen
        foreach ($users as $userData) {
            $existingUser = Usuario::where('id', $userData['id'])->first();

            if ($existingUser) {
                $existingUser->update($userData);
            } else {
                Usuario::create($userData);
            }
        }

        return response()->json(['message' => 'Datos de usuarios sincronizados correctamente']);
    }
}
