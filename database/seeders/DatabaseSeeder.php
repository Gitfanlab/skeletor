<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'create items']);
        Permission::create(['name' => 'read items']);
        Permission::create(['name' => 'update items']);
        Permission::create(['name' => 'delete items']);

        $admin_role = Role::create(['name' => 'admin']);
        $admin_role->givePermissionTo('create items');
        $admin_role->givePermissionTo('read items');
        $admin_role->givePermissionTo('update items');
        $admin_role->givePermissionTo('delete items');

        $user_role = Role::create(['name' => 'user']);
        $user_role->givePermissionTo('read items');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('Admin123!'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => bcrypt('User123!'),
        ]);
        $user->assignRole('user');
    }
}
