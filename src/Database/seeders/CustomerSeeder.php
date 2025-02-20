<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $customers = [
            ['name' => 'EKOL LOJİSTİK', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'ÖMÜR ÇELİK', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'TAYFUN BEY - REYHAN HANIM', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'CENK SEZER', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'MEHMET BİLAL', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'BAŞKANIN YERİ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'RUHİ BEY', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'SÜLEYMAN KILIÇ (KASSO)', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'BARIŞ KALEAĞASI', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'MUHARREM SÜRMEN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'DURSUN KELEŞ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'MURAT TUĞUTLU', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'METE ÇALIŞKAN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'DİLAVER ŞALLI', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'AYDIN DİNÇER', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'ARİF YILAN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'HAYDAR ÇİFTÇİ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'RÜSTEM YURTTAŞ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'MURAT DAĞ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'METİN ÇELİK EMLAK', 'customer_group' => 'Emlakçı', 'customer_type' => 'Kurumsal'],
            ['name' => 'MURAT ÇÖKMEZ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'ŞAMİL SATICI', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'YAŞAR EMLAK', 'customer_group' => 'Emlakçı', 'customer_type' => 'Bireysel'],
            ['name' => 'HÜSEYİN AYDIN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'SEDAT ERİŞKEN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'CAHİT UÇAR', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'ÖMER BEY', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'MURAT ERDOĞAN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'GÜLTEZER ÇETİNDAĞ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'SELİM HAYRİ KELEŞ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'İSMAİL KAYA', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'CENK SEZER', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'ZEKERİYA ÖZTÜRK', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'ALPARSLAN ARTUT', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'MURAT YILDIZ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'ÇETİN BEY', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'GÜLİZAR HANIM - YAŞAR BEY', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'YILMAZ DOĞAN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'CEM KALKAVAN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'SEPA ALİMİNYUM - ÖMER BEY', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'ALAATTİN BEY', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'HAKAN BEY', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'MUSTAFA DORALP', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'KAŞİF ŞAHİNKESEN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'ARİF KANİTOĞLU', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'CANER ERDOĞAN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'İMES ONUR BEY', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Bireysel'],
            ['name' => 'SELÇUK YURDUSEVEN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'YUSUF BEY', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'MERMERCİLER İLHAN ABİ', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'VEYSEL GÜÇTEKİN', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'DEM YAPI', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal'],
            ['name' => 'EMLAKÇI TAYFUN', 'customer_group' => 'Emlakçı', 'customer_type' => 'Bireysel'],
            ['name' => 'MURAT GÖK', 'customer_group' => 'Mal Sahibi', 'customer_type' => 'Kurumsal']
        ];

        foreach ($customers as $customer) {
            Customer::create([
                'name' => $customer['name'],
                'customer_group' => $customer['customer_group'],
                'customer_type' => $customer['customer_type'],
            ]);
        }
    }
}
