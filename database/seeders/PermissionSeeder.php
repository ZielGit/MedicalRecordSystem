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
        Permission::create(['name' => 'dashboard', 'description' => 'Ver panel'])->syncRoles(['Administrador', 'Doctor', 'Paciente']);

        Permission::create(['name' => 'user.index', 'description' => 'Ver lista de usuarios'])->syncRoles(['Administrador', 'Doctor']);
        Permission::create(['name' => 'user.create', 'description' => 'Crear usuario'])->syncRoles('Administrador');
        Permission::create(['name' => 'user.edit', 'description' => 'Editar usuario'])->syncRoles('Administrador');
        Permission::create(['name' => 'user.show', 'description' => 'Ver detalles del usuario'])->syncRoles(['Administrador', 'Doctor']);

        Permission::create(['name' => 'role.index', 'description' => 'Ver lista de roles'])->syncRoles('Administrador', 'Doctor');
        Permission::create(['name' => 'role.create', 'description' => 'Crear rol'])->syncRoles('Administrador');
        Permission::create(['name' => 'role.edit', 'description' => 'Editar rol'])->syncRoles('Administrador');
        Permission::create(['name' => 'role.show', 'description' => 'Ver detalles del rol'])->syncRoles('Administrador', 'Doctor');
    }
}
