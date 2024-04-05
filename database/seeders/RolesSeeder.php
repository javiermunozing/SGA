<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Crear roles
        $superadminRole = Role::create(['name' => 'superadmin']);
        $directorRole = Role::create(['name' => 'director']);
        $egresadoRole = Role::create(['name' => 'egresado']);
    }
}
