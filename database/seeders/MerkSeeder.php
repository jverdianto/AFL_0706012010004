<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('merk')->insert([
            'merk_code' => '001',
            'nama_merk' => 'Samsung',
            'tahun' => '1938',
            'pendiri' => 'Lee Byung-chull',
            'negara' => 'Korea Selatan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('merk')->insert([
            'merk_code' => '002',
            'nama_merk' => 'Apple',
            'tahun' => '1976',
            'pendiri' => 'Steve Jobs',
            'negara' => 'Amerika',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('merk')->insert([
            'merk_code' => '003',
            'nama_merk' => 'Oppo',
            'tahun' => '2004',
            'pendiri' => 'Tony Chen',
            'negara' => 'Tiongkok',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('merk')->insert([
            'merk_code' => '004',
            'nama_merk' => 'Xiaomi',
            'tahun' => '2010',
            'pendiri' => 'Lei Jun',
            'negara' => 'Tiongkok',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('merk')->insert([
            'merk_code' => '005',
            'nama_merk' => 'LG',
            'tahun' => '1958',
            'pendiri' => 'Koo In-Hwoi',
            'negara' => 'Korea Selatan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('merk')->insert([
            'merk_code' => '006',
            'nama_merk' => 'Vivo',
            'tahun' => '2009',
            'pendiri' => 'Shen Wei',
            'negara' => 'Tiongkok',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('merk')->insert([
            'merk_code' => '007',
            'nama_merk' => 'Asus',
            'tahun' => '1989',
            'pendiri' => 'T.H. Tung',
            'negara' => 'Tiongkok',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
