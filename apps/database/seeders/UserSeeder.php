<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengguna')->insert([
            'id_pengguna' => '153',
            'username' => 'admin',
	        'password'=> bcrypt('admin'),
            'nama_pengguna' => 'Admin',
            'no_telp' => '081983734941',
            'role' => 'admin',
            
        ]);

        DB::table('pengguna')->insert([
            'id_pengguna' => '324',
            'username' => 'kasir',
	        'password'=> bcrypt('kasir'),
            'nama_pengguna' => 'Kasir',
            'no_telp' => '0839494934',
            'role' => 'kasir',
        ]);

        DB::table('pengguna')->insert([
            'id_pengguna' => '097',
            'username' => 'pembeli',
	        'password'=> bcrypt('pembeli'),
            'nama_pengguna' => 'Pembeli',
            'no_telp' => '08876543456',
            'role' => NULL,
        ]);

    }
}
