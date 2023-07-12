<?php

namespace Database\Seeders;

use App\Models\Salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo1=new Salary();
        $tipo1->name = '1 SMLV';
        $tipo1->save();

        $tipo2=new Salary();
        $tipo2->name = 'Entre 1 SMLV a 2 SMLV';
        $tipo2->save();

        $tipo3=new Salary();
        $tipo3->name = 'Entre 2 SMLV a 3 SMLV';
        $tipo3->save();

        $tipo4=new Salary();
        $tipo4->name = 'Entre 3 SMLV a 4 SMLV';
        $tipo4->save();

        $tipo5=new Salary();
        $tipo5->name = 'Entre 4 SMLV a 5 SMLV';
        $tipo5->save();

        $tipo6=new Salary();
        $tipo6->name = '+ 5 SMLV';
        $tipo6->save();
    }
}
