<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ClientData = [
            [
                'user_id' => 2,
                'company' => 'Nutritrack',
                'bio' => 'Nutritrack adalah perusahaan yang fokus pada kesehatan. Kami menyediakan berbagai produk nutrisi untuk mendukung gaya hidup sehat. Bergabunglah dengan kami untuk mencapai kesehatan optimal.'
            ],
            [
                'user_id' => 3,
                'company' => 'FitLife',
                'bio' => 'FitLife berkomitmen untuk membantu orang mencapai tujuan kebugaran mereka. Dengan program yang terpersonalisasi, kami mendukung setiap langkah perjalanan Anda. Kesehatan adalah investasi terbaik yang bisa Anda lakukan.'
            ],
            [
                'user_id' => 4,
                'company' => 'HealthyBites',
                'bio' => 'HealthyBites menawarkan makanan sehat yang lezat dan bergizi. Kami percaya bahwa makanan yang baik dapat meningkatkan kualitas hidup. Temukan pilihan makanan yang sesuai dengan kebutuhan diet Anda.'
            ],
            [
                'user_id' => 5,
                'company' => 'WellnessHub',
                'bio' => 'WellnessHub adalah pusat kesehatan yang menyediakan berbagai layanan. Dari konsultasi gizi hingga program kebugaran, kami siap membantu Anda. Kesehatan Anda adalah prioritas kami.'
            ],
            [
                'user_id' => 6,
                'company' => 'VitaHealth',
                'bio' => 'VitaHealth berfokus pada penyediaan solusi kesehatan yang inovatif. Kami percaya bahwa setiap orang berhak mendapatkan akses ke kesehatan yang lebih baik. Bergabunglah dengan kami untuk menjelajahi berbagai produk kesehatan.'
            ],

        ];

        foreach($ClientData as $key => $val){
            Client::create($val);
        }
    }
}
