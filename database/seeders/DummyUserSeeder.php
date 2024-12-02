<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345678')
            ],
            [
                'name'=>'Client Budi',
                'email'=>'budi@gmail.com',
                'role'=>'client',
                'password'=>bcrypt('abcdefgh')
            ],
            [
                'name'=>'Freelancer Dini',
                'email'=>'dini@gmail.com',
                'role'=>'freelancer',
                'password'=>bcrypt('qwertyui')
            ]
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
