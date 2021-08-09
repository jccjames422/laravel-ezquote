<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Dealership;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dealership_id' => $dealer = Dealership::all()->random()->id,
            'user_id' => DB::table('users')->where('dealership_id', $dealer)->get()->random()->id,
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'cell_phone' => $this->faker->phoneNumber(),
        ];
    }
}
