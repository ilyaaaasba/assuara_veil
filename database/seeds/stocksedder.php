<?php

use Illuminate\Database\Seeder;
use App\stock;


class stocksedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->delete();
        
        stock::create(array(
        'nama'           => 'kerudung abu',
        'harga'          => '120000',
        'stok'           => '30',
        'gambar'         => 'k_abu.png',
        ));

        stock::create(array(
            'nama'           => 'kerudung biru',
            'harga'          => '100000',
            'stok'           => '30',
            'gambar'         => 'k_biru.png',
        ));
        
        stock::create(array(
            'nama'           => 'kerudung coklat',
            'harga'          => '120000',
            'stok'           => '30',
            'gambar'         => 'k_coklat.png',
        ));

        stock::create(array(
            'nama'           => 'kerudung coklat lagi',
            'harga'          => '150000',
            'stok'           => '30',
            'gambar'         => 'k_coklat1.png',
        ));

        stock::create(array(
            'nama'           => 'kerudung hijau',
            'harga'          => '250000',
            'stok'           => '30',
            'gambar'         => 'k_hijau.png',
        ));stock::create(array(
            'nama'           => 'kerudung item',
            'harga'          => '250000',
            'stok'           => '30',
            'gambar'         => 'k_item.png',
        ));
        stock::create(array(
            'nama'           => 'kerudung krem',
            'harga'          => '250000',
            'stok'           => '30',
            'gambar'         => 'k_krem.png',
        ));
        stock::create(array(
            'nama'           => 'kerudung merah',
            'harga'          => '250000',
            'stok'           => '30',
            'gambar'         => 'k_merah.png',
        ));
        stock::create(array(
            'nama'           => 'kerudung merah lagi',
            'harga'          => '250000',
            'stok'           => '30',
            'gambar'         => 'k_merah.png',
        ));
        stock::create(array(
            'nama'           => 'kerudung crem',
            'harga'          => '250000',
            'stok'           => '30',
            'gambar'         => 'k_krem.png',
        ));
        stock::create(array(
            'nama'           => 'kerudung silver',
            'harga'          => '250000',
            'stok'           => '30',
            'gambar'         => 'k_silver.png',
        ));
        
    }
}
