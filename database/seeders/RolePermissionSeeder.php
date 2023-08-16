<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

    //   $role = Role::create(['name' => 'admin']);

    //   $permission = [
    //     ['name' => 'Add Info'],
    //     ['name' => 'Edit Info'],
    //     ['name' => 'Delete Info'],
    //     ['name' => 'View Info'],
    //   ];

    //   foreach( $permission as $item){
    //     Permission::create( $item );
    //   }

    //   $role->syncPermissions(Permission::all());

    //   $user = User::first();
    //   $user->assignRole($role);






$adminRole = Role::create(['name' => 'admin']);

        $permissions = [
            ['name' => 'Add Info'],
            ['name' => 'Edit Info'],
            ['name' => 'Delete Info'],
            ['name' => 'View Info'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        $adminRole->syncPermissions(Permission::all());

        $users = User::all();

        // Assign the admin role to the first user
        if ($users->count() > 0) {
            $adminUser = $users->first();
            $adminUser->assignRole($adminRole);
        }

        // Assign the normal user role to other users
        $normalRole = Role::create(['name' => 'normal']);
        $normalPermissions = Permission::whereIn('name', ['View Info'])->get();
        $normalRole->syncPermissions($normalPermissions);

        $usersExceptFirst = $users->slice(1); // Exclude the first user

        foreach ($usersExceptFirst as $user) {
            $user->assignRole($normalRole);
        }




    }
}
