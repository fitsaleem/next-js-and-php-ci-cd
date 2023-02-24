<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $role = Role::updateOrCreate(['id' => '1'], ['name' => 'customer', 'guard_name' => 'api']);
        $role = Role::updateOrCreate(['id' => '2'], ['name' => 'admin', 'guard_name' => 'api']);
    }
}
