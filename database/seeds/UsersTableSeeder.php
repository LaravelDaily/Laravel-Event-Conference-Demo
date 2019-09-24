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
                'password'       => '$2y$10$7Xn/8bPJ89ypj0cIxwoH9OOXnbK/.9xrLfFh2G4LUSRkw6j7Agn0K',
                'remember_token' => null,
                'created_at'     => '2019-09-24 19:16:02',
                'updated_at'     => '2019-09-24 19:16:02',
            ],
        ];

        User::insert($users);
    }
}
