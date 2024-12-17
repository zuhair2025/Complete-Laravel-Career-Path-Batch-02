<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@example.com',
        //     'nid' => str_pad(random_int(0, 99999999999999), 14, '0', STR_PAD_LEFT),
        //     'phone' => '01' . random_int(100000000, 999999999),
        //     'vaccine_center_id' => 1,
        //     'vaccine_status' => 'not vaccinated',
        //     'password' => Hash::make('password'),
        // ]);

        User::factory(10)->create();
    }
}
