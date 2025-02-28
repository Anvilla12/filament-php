<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Asegúrate de importar el modelo User
use Illuminate\Support\Facades\Hash; // Para encriptar la contraseña

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear un usuario administrador
        User::create([
            'name' => 'Admin', // Nombre del usuario
            'email' => 'admin@example.com', // Correo electrónico
            'password' => Hash::make('password'), // Contraseña encriptada
        ]);

        // Opcional: Crear más usuarios de prueba
        User::create([
            'name' => 'Usuario de Prueba',
            'email' => 'test@example.com',
            'password' => Hash::make('test123'),
        ]);
    }
}
