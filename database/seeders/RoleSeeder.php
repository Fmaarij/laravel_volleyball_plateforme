<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([[
            'role' => 'Avant',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'role' => 'Central',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'role' => 'Arrière',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'role' => 'Remplaçant',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        ]);}
}
