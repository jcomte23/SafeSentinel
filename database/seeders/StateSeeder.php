<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo1=new State();
        $tipo1->name = 'Activo';
        $tipo1->save();

        $tipo2=new State();
        $tipo2->name = 'InActivo';
        $tipo2->save();

    }
}
