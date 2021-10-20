<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembeli = [
            ['nama'=>'Silvi', 'jns_kelamin'=>'Perempuan', 'alamat'=>'Jl.Saluyu Selatan','kode_pos'=>'40234','kota'=>'bandung','tgl_lahir'=>'2003-03-13'],
            ['nama'=>'Aliyul', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Sayuran','kode_pos'=>'40235','kota'=>'bandung','tgl_lahir'=>'2003-03-14'],
            ['nama'=>'Rifa', 'jns_kelamin'=>'Perempuan', 'alamat'=>'Sindang palay','kode_pos'=>'40236','kota'=>'bandung','tgl_lahir'=>'2003-03-15'],
            ['nama'=>'Sila', 'jns_kelamin'=>'Perempuan', 'alamat'=>'Sukamukti','kode_pos'=>'40237','kota'=>'bandung','tgl_lahir'=>'2003-03-16'],
            ['nama'=>'Ripa', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Sayuran','kode_pos'=>'40238','kota'=>'bandung','tgl_lahir'=>'2003-03-17'],
        ];
        DB::table('pembeli')->insert($pembeli);
    }
}
