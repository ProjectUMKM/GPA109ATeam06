<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class stokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $data  = [];

        $areas = [
            'Palembang' => 'PLG',
            'Bandung' => 'BDG',
            'Yogyakarta' => 'DIY',
            'Papua' => 'PPA',
            'Medan' => 'MDN',
            'Pekan Baru' => 'PBRU',
        ];

        for ($i=0; $i <= 2000; $i++) {

            $randomArea = $faker->randomElement($areas);
            $data[] = [
                'kode_barang' => strtoupper($faker->lexify('???').$faker->unique()->numerify('####')),
                'nama_barang' => $faker->words(10, true),
                'harga' => $faker->numberBetween(10000, 500000),
                'stok' => $faker->numberBetween(50, 100),
                'suplier_id' => $faker->numberBetween(1, 10),
                'cabang' => $randomArea,
            ];
        }

        DB::table('stoks')->insert($data);
    }
}
