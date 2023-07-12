<?php

namespace Database\Seeders;

use App\Models\CivilStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CivilStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo1=new CivilStatus();
        $tipo1->name = 'Soltero/a';
        $tipo1->save();

        $tipo2=new CivilStatus();
        $tipo2->name = 'Casado/a';
        $tipo2->save();

        $tipo3=new CivilStatus();
        $tipo3->name = 'Divorciado/a';
        $tipo3->save();

        $tipo4=new CivilStatus();
        $tipo4->name = 'Viudo/a';
        $tipo4->save();

        $tipo5=new CivilStatus();
        $tipo5->name = 'Unión libre';
        $tipo5->save();

        $tipo6=new CivilStatus();
        $tipo6->name = 'Separado/a';
        $tipo6->save();

        $tipo7=new CivilStatus();
        $tipo7->name = 'Matrimonio igualitario';
        $tipo7->save();

        $tipo8=new CivilStatus();
        $tipo8->name = 'Pareja de hecho';
        $tipo8->save();

        $tipo9=new CivilStatus();
        $tipo9->name = 'Anulado/a';
        $tipo9->save();

        $tipo10=new CivilStatus();
        $tipo10->name = 'Compromiso';
        $tipo10->save();
    }
}
