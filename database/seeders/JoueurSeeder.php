<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Joueur')->insert([
            'nom'=>'Jiovani',
            'prenom'=>'Eva',
            'age'=>22,
            'telephone'=>'0487512546',
            'email'=>'eva@gmail.com',
            'genre'=>'Femme',
            'pays'=>'Belgique',
            'role_id'=>1,
            'photo_id'=>1,
            'equipe_id'=>1,
            'updated_at' => now(),
            'created_at' => now()
        ]);
    }
}
