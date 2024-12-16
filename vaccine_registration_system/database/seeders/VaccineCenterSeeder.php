<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VaccineCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine_centers')->insert(
            [
                'name' => 'VC-001',
                'daily_limit' => '10',
            ],
            [
                'name' => 'VC-002',
                'daily_limit' => '10',
            ],
            [
                'name' => 'VC-003',
                'daily_limit' => '10',
            ],
            [
                'name' => 'VC-004',
                'daily_limit' => '10',
            ],
            [
                'name' => 'VC-005',
                'daily_limit' => '10',
            ]
    );
    }
}
