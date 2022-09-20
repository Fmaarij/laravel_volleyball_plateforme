<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([[
            'nomdeclub' => 'JetteVolly',
            'ville' => 'Liège',
            'pays' => 'Allemagne',
            'maxdejoueurparrole' => '9',
            'dejaajouter'=>'1',
            'continent_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'nomdeclub' => 'MolenVolly',
            'ville' => 'Bruxelles',
            'pays' => 'Belgique',
            'maxdejoueurparrole' => '9',
            'dejaajouter'=>'1',
            'continent_id' => 2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'nomdeclub' => 'BruxellesVolly',
            'ville' => 'Annvers',
            'pays' => 'Belgique',
            'maxdejoueurparrole' => '9',
            'dejaajouter'=>'1',
            'continent_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'nomdeclub' => 'IxellesVolly',
            'ville' => 'Gent',
            'pays' => 'Belgique',
            'maxdejoueurparrole' => '9',
            'dejaajouter'=>'1',
            'continent_id' => 4,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        ]);}
    }

