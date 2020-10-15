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
            "email" => "a@a.a",
            "password" => bcrypt("a"),
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
