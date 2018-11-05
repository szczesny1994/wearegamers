<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();

        $admin1 = new User();
        $admin1->name = 'admin1';
        $admin1->email = 'admin1@gamer2gamer.com';
        $admin1->password = bcrypt('zaq123');
        $admin1->save();
        $admin1->roles()->attach($role_admin);
    }
}
