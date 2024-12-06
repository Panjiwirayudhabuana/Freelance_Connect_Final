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
            //admin
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345678')
            ],
            //client
            [
                'name'=>'Panji Wira Yudha',
                'email'=>'wirayudha@gmail.com',
                'role'=>'client',
                'password'=>bcrypt('abcdefghpanji')
            ],
            [
                'name'=>'M. Fahril Afandi',
                'email'=>'fahril@gmail.com',
                'role'=>'client',
                'password'=>bcrypt('abcdefghpanji')
            ],
            [
                'name' => 'Siti Nurhaliza',
                'email' => 'sitinurhaliza@gmail.com',
                'role' => 'client',
                'password' => bcrypt('passwordsiti123')
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budisantoso@gmail.com',
                'role' => 'client',
                'password' => bcrypt('budi12345')
            ],
            [
                'name' => 'Dewi Lestari',
                'email' => 'dewilestari@gmail.com',
                'role' => 'client',
                'password' => bcrypt('dewilestari2023')
            ],
            // Freelancer
            [
                'name'=>'M. Alfin Nur Qodri',
                'email'=>'alfinnur@gmail.com',
                'role'=>'freelancer',
                'password'=>bcrypt('qwertyui')
            ],
            [
                'name' => 'Rina Amelia',
                'email' => 'rinaamelia@gmail.com',
                'role' => 'freelancer',
                'password' => bcrypt('ameliapassword')
            ],
            [
                'name' => 'Joko Prabowo',
                'email' => 'jokoprabowo@gmail.com',
                'role' => 'freelancer',
                'password' => bcrypt('jokopass123')
            ],
            [
                'name' => 'Sari Indah',
                'email' => 'sariindah@gmail.com',
                'role' => 'freelancer',
                'password' => bcrypt('sariindah456')
            ],
            [
                'name' => 'Toni Setiawan',
                'email' => 'tonisetiawan@gmail.com',
                'role' => 'freelancer',
                'password' => bcrypt('tonisetiawan789')
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
