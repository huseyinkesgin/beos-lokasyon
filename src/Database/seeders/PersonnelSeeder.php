<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnels')->insert([
            [
                'id' => 1,
                'name' => 'Nedim Akbacak',
                'email' => 'nedim@buradayapi.com.tr',
                'phone' => '507 300 00 00',
                'job_title' => 'Şirket Sahibi',
                'hire_date' => '2003-04-10',
                'termination_date' => null,
                'status' => "Çalışıyor",
                'created_at' => Carbon::parse('2024-10-16 04:28:23'),
                'updated_at' => Carbon::parse('2024-10-16 04:29:12'),
            ],
            [
                'id' => 2,
                'name' => 'Ömer Bahadır Gülseren',
                'email' => 'omer@buradayapi.com.tr',
                'phone' => '530 173 60 23',
                'job_title' => 'Danışman',
                'hire_date' => '2020-06-15',
                'termination_date' => null,
                'status' => "Çalışıyor",
                'created_at' => Carbon::parse('2024-10-15 07:22:33'),
                'updated_at' => Carbon::parse('2024-10-15 08:12:35'),
            ],


            [
                'id' => 3,
                'name' => 'Necla Küplüce',
                'email' => 'necla@buradayapi.com.tr',
                'phone' => '505 366 55 44',
                'job_title' => 'Mutfak Sorumlusu',
                'hire_date' => '2020-09-14',
                'termination_date' => null,
                'status' => "Çalışıyor",
                'created_at' => Carbon::parse('2024-10-18 10:49:28'),
                'updated_at' => Carbon::parse('2024-10-18 10:49:28'),
            ],
            [
                'id' => 4,
                'name' => 'Abdurrahman Kılıç',
                'email' => 'kilic@buradayapi.com.tr',
                'phone' => '530 173 60 20',
                'job_title' => 'Danışman',
                'hire_date' => '2020-09-18',
                'termination_date' => null,
                'status' => "Çalışıyor",
                'created_at' => Carbon::parse('2024-10-18 10:47:41'),
                'updated_at' => Carbon::parse('2024-10-18 10:47:41'),
            ],
            [
                'id' => 5,
                'name' => 'Hüseyin Kesgin',
                'email' => 'info@buradayapi.com.tr',
                'phone' => '530 173 60 21',
                'job_title' => 'Bilgi İşlem',
                'hire_date' => '2024-06-10',
                'termination_date' => null,
                'status' => "Çalışıyor",
                'created_at' => Carbon::parse('2024-10-16 04:28:23'),
                'updated_at' => Carbon::parse('2024-10-16 04:29:12'),
            ],


        ]);
    }
}
