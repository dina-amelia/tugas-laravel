<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use DB;


class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pesanan = [
            ['nama_pelanggan'=>'Dina', 'nama_barang'=>'Es krim', 'qty'=>5, 'tgl_pesan'=>'2021-10-10'],
            ['nama_pelanggan'=>'Fitria', 'nama_barang'=>'Roti', 'qty'=>15, 'tgl_pesan'=>'2021-10-11'],
            ['nama_pelanggan'=>'Kidam', 'nama_barang'=>'Kopi', 'qty'=>7, 'tgl_pesan'=>'2021-10-12'],
            ['nama_pelanggan'=>'Priyadi', 'nama_barang'=>'Tango', 'qty'=>11, 'tgl_pesan'=>'2021-10-13'],
            ['nama_pelanggan'=>'Kesyza', 'nama_barang'=>'Oreo', 'qty'=>20, 'tgl_pesan'=>'2021-10-14']
        ];
        DB::table('pesanan')->insert($pesanan);
    }
}
