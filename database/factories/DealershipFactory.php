<?php

namespace Database\Factories;

use App\Models\Dealership;
use Illuminate\Database\Eloquent\Factories\Factory;

class DealershipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dealership::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'address1' => $this->faker->streetAddress(),
            'address2' => $this->faker->streetSuffix(),
            'city' => $this->faker->city(),
            'state' => $this->faker->lexify('??'),
            'zip' => $this->faker->postcode(),
            'phone' => $this->faker->phoneNumber(),
            'sales_phone' => $this->faker->phoneNumber(),
            'fax' => $this->faker->phoneNumber(),
            'website' => $this->faker->url(),
            'timezone' => $this->faker->randomElement([
                'UTC-04:00 Atlantic',
                'UTC-05:00 Eastern',
                'UTC-06:00 Central',
                'UTC-07:00 Mountain',
                'UTC-08:00 Pacific',
                'UTC-09:00 Alaska',
                'UTC-10:00 Hawaii',
                'UTC+10:00 Guam'
            ]),
            'daylight_savings' => $this->faker->boolean(),

        ];
    }
}
