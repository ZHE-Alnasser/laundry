<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'item_id' => Item::inRandomOrder()->first(),
            'price' => 1000,
            'slug' => $this->faker->slug,
        ];
    }
}
