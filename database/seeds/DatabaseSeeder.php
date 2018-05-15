<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(PermissionTableSeeder::class);
        DB::table('users')->delete();

        // create admin role
        $role = ['name' => 'admin', 'display_name' => 'Admin', 'description' => 'Full Permission'];
        $role = Role::create($role);
        //set role permission
        $permission = Permission::get();
        foreach ($permission as $key => $value) {
            $role->attachPermission($value);
        }
        // create admin user
        $user = ['name' => 'Admin User', 'email' => 'adminuser@test.com', 'password' => Hash::make('adminpwd')];
        $user = User::create($user);
        // set user roll
        $user->attachRole($role);
    }
}
