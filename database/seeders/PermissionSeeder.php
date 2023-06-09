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
        Permission::create(['name' => 'admin.dashboard', 'description' => 'Ver panel', 'guard_name' => 'admin'])->syncRoles('Administrador');

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver lista de usuarios', 'guard_name' => 'admin'])->syncRoles('Administrador');
        Permission::create(['name' => 'admin.users.create', 'description' => 'Crear usuario', 'guard_name' => 'admin'])->syncRoles('Administrador');
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Editar usuario', 'guard_name' => 'admin'])->syncRoles('Administrador');
        Permission::create(['name' => 'admin.users.show', 'description' => 'Ver detalles del usuario', 'guard_name' => 'admin'])->syncRoles('Administrador');

        Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver lista de roles', 'guard_name' => 'admin'])->syncRoles('Administrador');
        Permission::create(['name' => 'admin.roles.create', 'description' => 'Crear rol', 'guard_name' => 'admin'])->syncRoles('Administrador');
        Permission::create(['name' => 'admin.roles.edit', 'description' => 'Editar rol', 'guard_name' => 'admin'])->syncRoles('Administrador');
        Permission::create(['name' => 'admin.roles.show', 'description' => 'Ver detalles del rol', 'guard_name' => 'admin'])->syncRoles('Administrador');
    }
}
