<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            "username" => "test",
            "email" => "user@user.user",
            "password" => bcrypt("user"),
            "role" => "User"
        ));
        User::create(array(
            "username" => "admin",
            "email" => "admin@admin.admin",
            "password" => bcrypt("admin"),
            "role" => "Admin"
        ));
    }
}
