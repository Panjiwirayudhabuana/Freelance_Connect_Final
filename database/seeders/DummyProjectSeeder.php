<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ProjectData = [
            [
                'client_id' => 1,
                'title' => 'Pengembangan Aplikasi Mobile',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 5000000,
                'deadline' => '2023-12-01 12:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 2,
                'title' => 'Desain Website E-Commerce',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 7500000,
                'deadline' => '2023-11-15 15:30:00',
                'status' => 'close'
            ],
            [
                'client_id' => 3,
                'title' => 'Pengembangan Sistem Manajemen',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 10000000,
                'deadline' => '2023-10-30 09:00:00',
                'status' => 'open'
            ],
            [
                'client_id' => 4,
                'title' => 'Integrasi API untuk Aplikasi',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 6000000,
                'deadline' => '2023-11-20 14:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 5,
                'title' => 'Pengembangan Website Portofolio',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 4000000,
                'deadline' => '2023-12-10 10:00:00',
                'status' => 'open'
            ],
            [
                'client_id' => 1,
                'title' => 'Pembuatan Aplikasi Desktop',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 8000000,
                'deadline' => '2023-11-25 11:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 2,
                'title' => 'Audit Keamanan Website',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 3000000,
                'deadline' => '2023-10-15 16:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 3,
                'title' => 'Pengembangan Chatbot untuk Website',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 7000000,
                'deadline' => '2023-11-05 13:00:00',
                'status' => 'open'
            ],
            [
                'client_id' => 4,
                'title' => 'Pembuatan Sistem Informasi',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 9500000,
                'deadline' => '2023-12-20 08:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 5,
                'title' => 'Desain UI/UX untuk Aplikasi',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 5500000,
                'deadline' => '2023-11-30 17:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 1,
                'title' => 'Pengembangan Game Mobile',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 12000000,
                'deadline' => '2023-12-15 12:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 2,
                'title' => 'Pembuatan Website Blog',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 3500000,
                'deadline' => '2023-10-25 14:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 3,
                'title' => 'Pengembangan Aplikasi CRM',
                'description' => 'Proyek pengembangan aplikasi mobile adalah proses yang mencakup perancangan, pengembangan, pengujian, dan peluncuran aplikasi untuk platform seperti Android atau iOS. Tahapan utamanya dimulai dengan identifikasi kebutuhan, yaitu menentukan tujuan aplikasi, target pengguna, dan fitur utama. Selanjutnya, dilakukan perancangan UI/UX dengan membuat prototipe atau wireframe untuk memastikan pengalaman pengguna yang optimal. Tahap berikutnya adalah pengembangan, di mana kode aplikasi ditulis menggunakan bahasa pemrograman seperti Kotlin, Swift, atau Flutter. Setelah itu, aplikasi diuji untuk memastikan fungsionalitas, keamanan, dan kinerjanya berjalan dengan baik. Terakhir, aplikasi diluncurkan ke toko aplikasi dan dilakukan pemeliharaan serta pembaruan secara rutin sesuai kebutuhan pengguna. Proyek ini bertujuan untuk menyediakan solusi digital yang inovatif dan sesuai dengan kebutuhan pasar.',
                'budget' => 9000000,
                'deadline' => '2023-11-10 09:30:00',
                'status' => 'close'
            ],
            [
                'client_id' => 4,
                'title' => 'Pembuatan API untuk Mobile',
                'description' => 'Ini adalah deskripsi dari proyek pembuatan API untuk mobile.',
                'budget' => 6500000,
                'deadline' => '2023-12-05 11:15:00',
                'status' => 'open'
            ],
            [
                'client_id' => 5,
                'title' => 'Desain Logo untuk Startup',
                'description' => 'Ini adalah deskripsi dari proyek desain logo untuk startup.',
                'budget' => 2000000,
                'deadline' => '2023-11-12 10:45:00',
                'status' => 'close'
            ],
            [
                'client_id' => 1,
                'title' => 'Pengembangan Sistem E-Learning',
                'description' => 'Ini adalah deskripsi dari proyek pengembangan sistem e-learning.',
                'budget' => 11000000,
                'deadline' => '2023-12-25 13:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 2,
                'title' => 'Pembuatan Aplikasi Inventory',
                'description' => 'Ini adalah deskripsi dari proyek pembuatan aplikasi inventory.',
                'budget' => 7500000,
                'deadline' => '2023-11-22 15:00:00',
                'status' => 'open'
            ],
            [
                'client_id' => 3,
                'title' => 'Pengembangan Website Katalog',
                'description' => 'Ini adalah deskripsi dari proyek pengembangan website katalog.',
                'budget' => 4000000,
                'deadline' => '2023-10-28 12:30:00',
                'status' => 'close'
            ],
            [
                'client_id' => 4,
                'title' => 'Pembuatan Sistem Booking Online',
                'description' => 'Ini adalah deskripsi dari proyek pembuatan sistem booking online.',
                'budget' => 8500000,
                'deadline' => '2023-11-18 14:30:00',
                'status' => 'close'
            ],
            [
                'client_id' => 5,
                'title' => 'Desain Aplikasi Mobile',
                'description' => 'Ini adalah deskripsi dari proyek desain aplikasi mobile.',
                'budget' => 5000000,
                'deadline' => '2023-12-02 16:00:00',
                'status' => 'open'
            ],
            [
                'client_id' => 1,
                'title' => 'Pengembangan Sistem Pembayaran',
                'description' => 'Ini adalah deskripsi dari proyek pengembangan sistem pembayaran.',
                'budget' => 9500000,
                'deadline' => '2023-11-29 11:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 2,
                'title' => 'Pembuatan Website Portfolio',
                'description' => 'Ini adalah deskripsi dari proyek pembuatan website portfolio.',
                'budget' => 3000000,
                'deadline' => '2023-10-20 09:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 3,
                'title' => 'Pengembangan Aplikasi Fitness',
                'description' => 'Ini adalah deskripsi dari proyek pengembangan aplikasi fitness.',
                'budget' => 6000000,
                'deadline' => '2023-12-12 10:00:00',
                'status' => 'open'
            ],
            [
                'client_id' => 4,
                'title' => 'Pembuatan Sistem Reservasi',
                'description' => 'Ini adalah deskripsi dari proyek pembuatan sistem reservasi.',
                'budget' => 8000000,
                'deadline' => '2023-11-27 13:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 5,
                'title' => 'Desain Aplikasi E-Commerce',
                'description' => 'Ini adalah deskripsi dari proyek desain aplikasi e-commerce.',
                'budget' => 7000000,
                'deadline' => '2023-12-30  12:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 1,
                'title' => 'Pengembangan Sistem Keuangan',
                'description' => 'Ini adalah deskripsi dari proyek pengembangan sistem keuangan.',
                'budget' => 9000000,
                'deadline' => '2023-11-15 14:00:00',
                'status' => 'open'
            ],
            [
                'client_id' => 2,
                'title' => 'Pembuatan Aplikasi Kesehatan',
                'description' => 'Ini adalah deskripsi dari proyek pembuatan aplikasi kesehatan.',
                'budget' => 6500000,
                'deadline' => '2023-12-05 09:30:00',
                'status' => 'close'
            ],
            [
                'client_id' => 3,
                'title' => 'Pengembangan Sistem E-Commerce',
                'description' => 'Ini adalah deskripsi dari proyek pengembangan sistem e-commerce.',
                'budget' => 11000000,
                'deadline' => '2023-11-22 11:00:00',
                'status' => 'close'
            ],
            [
                'client_id' => 4,
                'title' => 'Pembuatan Aplikasi Edukasi',
                'description' => 'Ini adalah deskripsi dari proyek pembuatan aplikasi edukasi.',
                'budget' => 8000000,
                'deadline' => '2023-12-10 10:00:00',
                'status' => 'open'
            ],
            [
                'client_id' => 5,
                'title' => 'Desain Website Pribadi',
                'description' => 'Ini adalah deskripsi dari proyek desain website pribadi.',
                'budget' => 4000000,
                'deadline' => '2023-11-30 15:00:00',
                'status' => 'close'
            ]

        ];

        foreach($ProjectData as $key => $val){
            Project::create($val);
        }
    }
}
