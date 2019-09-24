<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$t1OWbw53gvJufJTfiqx3n.o2FpGr53MIZjB5vIpOvFA6GUIP09gjW',
                'remember_token' => null,
                'created_at'     => '2019-09-24 18:25:05',
                'updated_at'     => '2019-09-24 18:25:05',
            ],
        ];

        User::insert($users);
    }
}
