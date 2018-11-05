<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'admin of the page';
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'normal user';
        $role_user->save();

        $role_owner = new Role();
        $role_owner->name = 'owner';
        $role_owner->description = 'owner of a group or an event';
        $role_owner->save();

        $role_editor = new Role();
        $role_editor->name = 'editor';
        $role_editor->description = 'editor of the group';
        $role_editor->save();
    }
}
