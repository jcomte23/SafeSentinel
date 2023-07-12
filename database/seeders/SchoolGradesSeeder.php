<?php

namespace Database\Seeders;

use App\Models\SchoolGrades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolGradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo1=new SchoolGrades();
        $tipo1->name = 'Primaria';
        $tipo1->save();

        $tipo2=new SchoolGrades();
        $tipo2->name = 'Bachillerato';
        $tipo2->save();

        $tipo3=new SchoolGrades();
        $tipo3->name = 'Tecnico';
        $tipo3->save();

        $tipo4=new SchoolGrades();
        $tipo4->name = 'Tecnologico';
        $tipo4->save();

        $tipo5=new SchoolGrades();
        $tipo5->name = 'Universitario';
        $tipo5->save();

        $tipo6=new SchoolGrades();
        $tipo6->name = 'Maestria';
        $tipo6->save();
    }
}
