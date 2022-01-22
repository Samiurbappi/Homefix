<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'admin',
                'role'=>'admin',
                'email'=>'test@gmail.com',
                'password'=>bcrypt('123456'),
            ],
        );
        User::create(
            [
                'role'=>'sp',
                'name'=>'SP',
                'email'=>'sp@gmail.com',
                'password'=>bcrypt('123456'),
            ],
        );
        User::create(
            [
                'role'=>'user',
                'name'=>'User',
                'email'=>'user@gmail.com',
                'password'=>bcrypt('123456'),
            ],
        );
    }
}
