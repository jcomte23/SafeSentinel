<?php

namespace Database\Seeders;

use App\Models\BloodTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo1=new BloodTypes();
        $tipo1->abbreviation = 'A+';
        $tipo1->name = 'A positivo';
        $tipo1->save();

        $tipo2=new BloodTypes();
        $tipo2->abbreviation = 'A-';
        $tipo2->name = 'A negativo';
        $tipo2->save();

        $tipo3=new BloodTypes();
        $tipo3->abbreviation = 'B+';
        $tipo3->name = 'B positivo';
        $tipo3->save();

        $tipo4=new BloodTypes();
        $tipo4->abbreviation = 'B-';
        $tipo4->name = 'B negativo';
        $tipo4->save();

        $tipo5=new BloodTypes();
        $tipo5->abbreviation = 'AB+';
        $tipo5->name = 'AB positivo';
        $tipo5->save();

        $tipo6=new BloodTypes();
        $tipo6->abbreviation = 'AB-';
        $tipo6->name = 'AB negativo';
        $tipo6->save();

        $tipo7=new BloodTypes();
        $tipo7->abbreviation = 'O+';
        $tipo7->name = 'O positivo';
        $tipo7->save();

        $tipo8=new BloodTypes();
        $tipo8->abbreviation = 'O-';
        $tipo8->name = 'O negativo';
        $tipo8->save();
    }
}
