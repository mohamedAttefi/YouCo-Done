<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $permissions = [
            'view profile',
            'update profile',

            'view restaurants',
            'view restaurant details',
            'search restaurants',
            'create restaurant',
            'update restaurant',
            'delete restaurant',
            'delete any restaurant',

            'add restaurant to favorites',
            'remove restaurant from favorites',
            'view favorites',

            'view admin dashboard',
            'manage users',
            'manage roles'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $client = Role::firstOrCreate(['name' => 'client']);
        $restaurateur = Role::firstOrCreate(['name' => 'restaurateur']);
        $admin = Role::firstOrCreate(['name' => 'admin']);

        $client->syncPermissions([
            'view restaurants',
            'view restaurant details',
            'search restaurants',
            'add restaurant to favorites',
            'remove restaurant from favorites',
            'view favorites',
            'view profile',
            'update profile',
        ]);

        $restaurateur->syncPermissions([
            'view restaurants',
            'view restaurant details',
            'search restaurants',
            'create restaurant',
            'update restaurant',
            'delete restaurant',
            'view profile',
            'update profile',
        ]);

        $admin->syncPermissions(Permission::all());
    }
}
