<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['name' => 'question', 'intitule' => "Valider une question", "view" => 'question'],
            ['name' => 'nombre', 'intitule' => "Répondre par un nombre", "view" => 'nombre'],
            ['name' => 'qcm', 'intitule' => "QCM", "view" => 'qcm'],
            ['name' => 'qcu', 'intitule' => "QCU", "view" => 'qcu'],
        ]);
    }
}
