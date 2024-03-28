<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'mobile' => $this->faker->mobile(),
            'parent_name' => $this->faker->parentName(),
            'lieudenaissance' => $this->faker->lieudenaissance(),
            'parent_phone_number' => $this->faker->phoneNumber(),
            'birth_date' => Carbon::now()->subYears(15),
            'classroom_id' => Classroom::inRandomOrder()->first(),
            'addresse' => $this->faker->address(),
            'enrollment_date' => Carbon::now()->subYears(),
            'gender' => rand(0,1),
        ];
    }
}
