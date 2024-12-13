<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $PaymentData = [
            [
                'detail_project_id' => 2,
                'status' => 'completed'
            ],
            [
                'detail_project_id' => 3,
                'status' => 'not yet'
            ],
            [
                'detail_project_id' => 5,
                'status' => 'not yet'
            ]
        ];
        foreach($PaymentData as $key => $val){
            Payment::create($val);
        }
    }
}
