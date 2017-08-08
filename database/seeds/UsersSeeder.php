<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role admin
        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name="Admin";
        $adminRole->save();

        //role member
        $memberRole= new Role();
        $memberRole->name="member";
        $memberRole->display_name="Member";
        $memberRole->save();

        //sample admin
        $admin = new User();
        $admin->name='Admin Perpustakaan';
        $admin->email='admin@perpustakaan.com';
        $admin->password=bcrypt('perpustakaan');
        $admin->save();
        $admin->attachRole($adminRole);

        //sample member
        $member = new User();
        $member->name='Sample Member';
        $member->email='member@perpustakaan.com';
        $member->password=bcrypt('perpustakaan');
        $member->save();
        $member->attachRole($memberRole);
    }
}
