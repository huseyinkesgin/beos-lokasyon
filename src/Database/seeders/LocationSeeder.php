<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\City;
use App\Models\Town;
use App\Models\District;
use App\Models\Neighborhood;

class LocationSeeder extends Seeder
{

    protected $cities = [];
    protected $towns = [];
    protected $districts = [];

    public function run()
    {
        $path = public_path('location/dosya.xlsx');

        // Excel verilerini al
        $rows = Excel::toArray([], $path)[0];

        // Başlık satırını kaldır
        array_shift($rows);

        DB::transaction(function () use ($rows) {
            foreach ($rows as $row) {
                $cityName = trim($row[0]); // İl
                $townName = trim($row[1]); // İlçe
                $districtName = trim($row[2]); // Semt
                $neighborhoodName = trim($row[3]); // Mahalle
                $postalCode = trim($row[4]); // Posta Kodu

                // Şehir
                if (!isset($this->cities[$cityName])) {
                    $city = City::firstOrCreate(
                        ['name' => $cityName],
                    );
                    $this->cities[$cityName] = $city->id;
                    $this->command->info("Şehir eklendi: {$cityName}");
                }

                // İlçe
                $townKey = $cityName . '-' . $townName;
                if (!isset($this->towns[$townKey])) {
                    $town = Town::firstOrCreate(
                        [
                            'city_id' => $this->cities[$cityName],
                            'name' => $townName
                        ],
                    );
                    $this->towns[$townKey] = $town->id;
                    $this->command->info("İlçe eklendi: {$townName}");
                }

                // Semt
                $districtKey = $townKey . '-' . $districtName;
                if (!isset($this->districts[$districtKey])) {
                    $district = District::firstOrCreate(
                        [
                            'town_id' => $this->towns[$townKey],
                            'name' => $districtName
                        ],
                    );
                    $this->districts[$districtKey] = $district->id;
                    $this->command->info("Semt eklendi: {$districtName}");
                }

                // Mahalle
                Neighborhood::firstOrCreate(
                    [
                        'district_id' => $this->districts[$districtKey],
                        'name' => $neighborhoodName,
                    ],
                    [
                        'postal_code' => $postalCode,
                    ]
                );
            }
        });

        $this->command->info('Tüm lokasyon verileri başarıyla eklendi!');
    }
}
