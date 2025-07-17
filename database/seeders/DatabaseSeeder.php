<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        
        $store_food_permission = Permission::create(['name' => 'store food']);
        $store_list_food_permission = Permission::create(['name' => 'store food category']);
        
        $role->givePermissionTo($store_food_permission);
        $role->givePermissionTo($store_list_food_permission);

        $user = User::find(1);

        $user->assignRole('admin');
        
    }
}
