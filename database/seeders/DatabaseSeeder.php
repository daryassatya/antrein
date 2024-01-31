<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Perusahaan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     UserSeeder::class,
        // ]);

        $users = [[
            'perusahaan_id' => 1,
            'name' => 'Minco',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '012345678910',
            'address' => 'Indonesia JL.Soekarno Hatta Leuwih Panjang',
            'password' => Hash::make('admin'),
            'is_admin' => true,
        ],[
            'perusahaan_id' => 2,
            'name' => 'Mince',
            'username' => 'root',
            'email' => 'root@gmail.com',
            'phone' => '012345678910',
            'address' => 'Indonesia JL.Soekarno Hatta Leuwih Pendek',
            'password' => Hash::make('root'),
            'is_admin' => 1,
        ]];
        
        $perusahaans = [[
            'nama_perusahaan' => "PT. Mencari Cinta Sejati",
            'alamat_perusahaan' => 'Indonesia JL.Soekarno Hatta Leuwih Panjang',
        ],[
            'nama_perusahaan' => "PT. Pencari Profit",
            'alamat_perusahaan' => 'Indonesia JL.Soekarno Hatta Leuwih Pendek',
        ]];

        foreach ($users as $user) {
            User::create($user);
        }
        
        foreach ($perusahaans as $perusahaan) {
            Perusahaan::create($perusahaan);
        }
    }
}
