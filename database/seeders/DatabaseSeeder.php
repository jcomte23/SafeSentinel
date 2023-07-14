<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TypesOfDocumentsSeeder::class);
        $this->call(TypesOfGenresSeeder::class);
        $this->call(BloodTypesSeeder::class);
        $this->call(CivilStatusSeeder::class);
        $this->call(SchoolGradesSeeder::class);
        $this->call(SalarySeeder::class);
        $this->call(WorkSchedulesSeeder::class);
        $this->call(StateSeeder::class);
        Employee::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
