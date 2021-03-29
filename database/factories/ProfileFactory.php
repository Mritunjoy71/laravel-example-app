<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'avatar'=>$this->faker->name,
            'address'=>$this->faker->address,
            'phone'=>$this->faker->numberBetween(8801700000000,8801799999999),
            'company'=>$this->faker->company,
            'start_date'=>$this->faker->date,
            'end_date'=>$this->faker->date,
        ];
    }
}
