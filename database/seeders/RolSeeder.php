<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles de nuestro modelo
        Rol::create([
            'id' => 1,
            'name'=> "Administrador"
        ]);
        Rol::create([
            'id' => 2,
            'name'=> "Visitante"
        ]);

        Rol::create([
            'id' => 3,
            'name'=> "Empresa"
        ]);

        // Roles de spatie
        Role::create(['name' => 'Administrador']);
        Role::create(['name' => 'Visitante']);
        Role::create(['name' => 'Empresa']);

    }
}
