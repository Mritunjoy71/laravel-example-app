<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email_id' => $this->faker->unique()->safeEmail,
            'phone_no' => $this->faker->numberBetween(8801700000000,8801799999999),
            'image' => $this->faker->image(),
        ];
    }
}
