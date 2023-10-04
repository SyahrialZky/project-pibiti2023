<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'user432',
            'username' => 'user432',
            'password' => bcrypt('password'),
            'role' => '0',
            'nomor_telepon' => '0821082102',
            'email' => 'useruser@gmail.com'

        ]);

        DB::table('users')->insert([
            'name' => 'peserta',
            'username' => 'peserta',
            'password' => bcrypt('password'),
            'nomor_telepon' => "08888888888",
            'email' => "peserta@gmail.com",
            'role' => '2',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'nomor_telepon' => "08888888888",
            'email' => "admin@gmail.com",
            'role' => '1',
        ]);
    }
}
