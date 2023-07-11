<?php

namespace Database\Seeders;

use App\Models\TypesOfGenres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesOfGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo1=new TypesOfGenres();
        $tipo1->name = 'Masculino';
        $tipo1->save();

        $tipo2=new TypesOfGenres();
        $tipo2->name = 'Femenino';
        $tipo2->save();

        $tipo3=new TypesOfGenres();
        $tipo3->name = 'Prefiero no decirlo';
        $tipo3->save();
    }
}
