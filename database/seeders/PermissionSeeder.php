<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'dashboard', 'description' => 'Ver panel'])->syncRoles(['Administrador', 'Secretario', 'Doctor', 'Paciente']);

        Permission::create(['name' => 'users.index', 'description' => 'Ver lista de usuarios'])->syncRoles(['Administrador', 'Secretario', 'Doctor']);
        Permission::create(['name' => 'users.create', 'description' => 'Crear usuario'])->syncRoles('Administrador');
        Permission::create(['name' => 'users.edit', 'description' => 'Editar usuario'])->syncRoles('Administrador');
        Permission::create(['name' => 'users.show', 'description' => 'Ver detalles del usuario'])->syncRoles(['Administrador', 'Doctor']);

        Permission::create(['name' => 'roles.index', 'description' => 'Ver lista de roles'])->syncRoles('Administrador', 'Doctor');
        Permission::create(['name' => 'roles.create', 'description' => 'Crear rol'])->syncRoles('Administrador');
        Permission::create(['name' => 'roles.edit', 'description' => 'Editar rol'])->syncRoles('Administrador');
        Permission::create(['name' => 'roles.show', 'description' => 'Ver detalles del rol'])->syncRoles('Administrador', 'Doctor');
    }
}
