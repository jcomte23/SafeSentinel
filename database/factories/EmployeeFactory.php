<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'identification_number' => $this->faker->unique()->randomNumber(8),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'optional_phone' => $this->faker->phoneNumber,
            'date_of_birth' => $this->faker->date(),
            'family_composition' => $this->faker->paragraph,
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'occupation' => $this->faker->jobTitle,
            'work_area' => $this->faker->jobTitle,
            'HdV' => $this->faker->company,
            'EPS' => $this->faker->company,
            'AFP' => $this->faker->company,
            'ARL' => $this->faker->company,
            'CCF' => $this->faker->company,
            'emergency_contact' => $this->faker->name,
            'emergency_phone' => $this->faker->phoneNumber,
            'socioeconomic_stratum' => $this->faker->randomElement(['Low', 'Middle', 'High']),
        ];
    }
}
