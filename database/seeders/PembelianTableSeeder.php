<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembelian = [
            ['nama_barang'=>'Es Krim', 'nama_suplier'=>'Altaf', 'qty'=>'200', 'tgl'=>'2021-10-1'],
            ['nama_barang'=>'Roti', 'nama_suplier'=>'Alvin', 'qty'=>'150', 'tgl'=>'2021-10-2'],
            ['nama_barang'=>'Kopi', 'nama_suplier'=>'Aldi', 'qty'=>'340', 'tgl'=>'2021-10-3'],
            ['nama_barang'=>'Tango', 'nama_suplier'=>'Hasan', 'qty'=>'130', 'tgl'=>'2021-10-4'],
            ['nama_barang'=>'Oreo', 'nama_suplier'=>'Akbar', 'qty'=>'237', 'tgl'=>'2021-10-5'],
        ];
        DB::table('pembelian')->insert($pembelian);
    }
}
