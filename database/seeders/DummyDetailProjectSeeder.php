<?php

namespace Database\Seeders;

use App\Models\DetailProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDetailProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $DetailProjectData = [ 
            [
                'project_id' => 1,
                'freelancer_id' => 1, 
                'status' => 'in progress',
            ],   
            [
                'project_id' => 3,
                'freelancer_id' => 1, 
                'status' => 'in progress',
            ],       
        ];

        foreach($DetailProjectData as $key => $val){
            DetailProject::create($val);
        }
    }
}
