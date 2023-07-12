<?php

namespace Database\Seeders;

use App\Models\WorkSchedules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo1=new WorkSchedules();
        $tipo1->name = 'Diurna(6:00-22:00)';
        $tipo1->save();

        $tipo2=new WorkSchedules();
        $tipo2->name = 'Nocturna(22:00-6:00)';
        $tipo2->save();

        $tipo3=new WorkSchedules();
        $tipo3->name = 'Mixta';
        $tipo3->save();
    }
}
