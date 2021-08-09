<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::all()->random()->id,
            'vin' => $this->faker->bothify('#????##?#??######'),
            'stock' => $this->faker->bothify('??###'),
            'source' => $this->faker->words(3, true),
            'contacted' => false,
            'status' => 'new',
            'comments' => $this->faker->paragraphs(3, true)
        ];
    }
}
