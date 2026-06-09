<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->optional()->paragraph(),
            'activity_date' => $this->faker->dateTimeBetween('now', '+30 days')->format('Y-m-d'),
            'status' => $this->faker->randomElement(['pending', 'done']),
        ];
    }
}
