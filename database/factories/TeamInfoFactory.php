<?php

namespace Database\Factories;

use App\Models\TeamInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'role' => $this->faker->word,
        'introduce' => $this->faker->word,
        'degree' => $this->faker->word,
        'expertise' => $this->faker->word,
        'certificate_license' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
