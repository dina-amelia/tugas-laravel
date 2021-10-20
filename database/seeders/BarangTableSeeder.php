<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $barang = [
            ['id_barang'=>'1', 'nama'=>'Es Krim', 'varian'=>'coklat', 'harga_beli'=>'10000', 'harga_jual'=>'15000'],
            ['id_barang'=>'2', 'nama'=>'Roti', 'varian'=>'kelapa', 'harga_beli'=>'1500', 'harga_jual'=>'3000'],
            ['id_barang'=>'3', 'nama'=>'Kopi', 'varian'=>'mocca', 'harga_beli'=>'7000', 'harga_jual'=>'15000'],
            ['id_barang'=>'4', 'nama'=>'Tango', 'varian'=>'vanilla', 'harga_beli'=>'8000', 'harga_jual'=>'20000'],
            ['id_barang'=>'5', 'nama'=>'Oreo', 'varian'=>'coklat', 'harga_beli'=>'10000', 'harga_jual'=>'25000'],
        ];
        DB::table('barang')->insert($barang);
    }
}
