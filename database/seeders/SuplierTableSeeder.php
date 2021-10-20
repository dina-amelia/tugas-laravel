<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $suplier = [
            [ 'nama'=>'Rio', 'alamat'=>'cibaduyut', 'kode_pos'=>'40237', 'kota'=>'bandung'],
            ['nama'=>'Nikita', 'alamat'=>'sayuran', 'kode_pos'=>'40233', 'kota'=>'bandung'],
            ['nama'=>'Nisa', 'alamat'=>'sayati', 'kode_pos'=>'40262', 'kota'=>'bandung'],
            ['nama'=>'Nasywa', 'alamat'=>'rancamanyar', 'kode_pos'=>'40278', 'kota'=>'bandung'],
            ['nama'=>'Fikri', 'alamat'=>'rancamanyar', 'kode_pos'=>'40277', 'kota'=>'bandung'],
        ];
        DB::table('suplier')->insert($suplier);
    }
}
