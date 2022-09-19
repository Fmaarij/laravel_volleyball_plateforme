<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('continents')->insert([[
            'continent' => 'Asie',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'continent' => 'Europe',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'continent' => 'Afrique',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'continent' => 'Amérique',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'continent' => 'Antarctique',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'continent' => 'Australie',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        ]);}
    }

