<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name('female'),
            'phone' => $this->faker->numerify('9#########'),
            'email' => $this->faker->safeEmail(),
            'preferred_service' => $this->faker->randomElement(array_column(config('salon.categories'), 'name')),
            'preferred_date' => $this->faker->dateTimeBetween('+1 day', '+1 month')->format('Y-m-d'),
            'preferred_time' => $this->faker->randomElement(['10:00 AM', '12:00 PM', '2:00 PM', '4:00 PM', '6:00 PM']),
            'message' => $this->faker->optional()->sentence(),
        ];
    }
}
