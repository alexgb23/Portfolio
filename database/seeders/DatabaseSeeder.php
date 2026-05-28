<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 🚀 CORREGIDO: Evita duplicados buscando si el correo ya existe antes de insertar
        User::firstOrCreate(
            ['email' => 'test@example.com'], // Condición de búsqueda
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Añade una contraseña por defecto requerida
            ]
        );

        $this->call([
            SystemDataSeeder::class,
        ]);
    }
}
