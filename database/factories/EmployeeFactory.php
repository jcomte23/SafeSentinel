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
            'state_id'=>$this->faker->randomElement([1,2]),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'types_of_document_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8]),
            'identification_number' => $this->faker->unique()->randomNumber(8),
            'email' => $this->faker->unique()->safeEmail,
            'international_phone_code_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8]),
            'phone' => $this->faker->phoneNumber,
            'optional_international_phone_code_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8]),
            'optional_phone' => $this->faker->phoneNumber,
            'types_of_genre_id' => 1,
            'blood_type_id' => 1,
            'date_of_birth' => $this->faker->date(),
            'civil_status_id' => 1,
            'family_composition' => $this->faker->paragraph,
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'occupation' => $this->faker->jobTitle,
            'work_area' => $this->faker->jobTitle,
            'school_grade_id' => 1,
            'salary_id' => 1,
            'work_schedule_id' => 1,
            'HdV' => $this->faker->company,
            'current_contract' => $this->faker->company,
            'EPS' => $this->faker->company,
            'AFP' => $this->faker->company,
            'ARL' => $this->faker->company,
            'CCF' => $this->faker->company,
            'emergency_contact' => $this->faker->name,
            'emergency_international_phone_code_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8]),
            'emergency_phone' => $this->faker->phoneNumber,
            'socioeconomic_stratum' => $this->faker->randomElement(['Low', 'Middle', 'High']),
        ];
    }
}
