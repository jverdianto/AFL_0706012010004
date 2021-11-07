<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('jenis')->insert([
            'nama_hp' => 'Samsung Galaxy F42 5G',
            'size' => '6.6 inches',
            'camera' => '64 MP',
            'ram' => '6/8 GB',
            'storage' => '128 GB',
            'battery' => "5000 mAh",
            'merk_hp' => '001',
            'img_url' => 'https://img.tek.id/img/content/2021/07/23/43433/samsung-galaxy-f42-5g-muncul-di-geekbench-bSEq99Aeon.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('jenis')->insert([
            'nama_hp' => 'Apple iPhone 13',
            'size' => '6.1 inches',
            'camera' => '12 MP',
            'ram' => '4 GB',
            'storage' => '128/256/512 GB',
            'battery' => "3240 mAh",
            'merk_hp' => '002',
            'img_url' => 'https://asset.kompas.com/crops/HuYAPAvRsyu3PE7L583UY16aQkM=/0x0:1200x800/750x500/data/photo/2021/09/15/6140ef998c42a.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('jenis')->insert([
            'nama_hp' => 'Oppo Reno 6',
            'size' => '6.4 inches',
            'camera' => '64 MP',
            'ram' => '8 GB',
            'storage' => '128 GB',
            'battery' => "4310 mAh",
            'merk_hp' => '003',
            'img_url' => 'https://www.begawei.com/wp-content/uploads/2021/05/Oppo-Reno-6-5G.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('jenis')->insert([
            'nama_hp' => 'Xiaomi Redmi Note 11 Pro+',
            'size' => '6.67 inches',
            'camera' => '108 MP',
            'ram' => '6/8 GB',
            'storage' => '128/256 GB',
            'battery' => "4500 mAh",
            'merk_hp' => '004',
            'img_url' => 'https://cdn-files.kimovil.com/default/0006/66/thumb_565440_default_big.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('jenis')->insert([
            'nama_hp' => 'LG W41',
            'size' => '6.55 inches',
            'camera' => '48 MP',
            'ram' => '4 GB',
            'storage' => '64 GB',
            'battery' => "5000 mAh",
            'merk_hp' => '005',
            'img_url' => 'https://phoneaqua.com/products/lg-w41.JPG',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('jenis')->insert([
            'nama_hp' => 'Vivo X70 Pro',
            'size' => '6.56 inches',
            'camera' => '50 MP',
            'ram' => '8/12/16 GB',
            'storage' => '128/256/512 GB',
            'battery' => "4450 mAh",
            'merk_hp' => '006',
            'img_url' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/09/30/3096723673.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('jenis')->insert([
            'nama_hp' => 'Asus ROG Phone 5s',
            'size' => '6.78 inches',
            'camera' => '64 MP',
            'ram' => '8/12/16 GB',
            'storage' => '128/256/512 GB',
            'battery' => "6000 mAh",
            'merk_hp' => '007',
            'img_url' => 'https://www.droidlime.com/wp-content/uploads/2021/08/ROG-Phone-5s-Series-2.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
