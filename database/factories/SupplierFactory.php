<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupplierFactory extends Factory
{

    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => 'SP.'.$this->faker->unique()->randomNumber(),
            'name' => $this->faker->name(),
            'supplier_category_id' => $this->faker->numberBetween(1,2),
            'supplier_sub_category_id' => $this->faker->numberBetween(1,2),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->url(),
            'join_date' => $this->faker->date(),
            'contract_duration' => $this->faker->numberBetween(1,5),
            'account_number' => $this->faker->creditCardNumber()
        ];
    }
}
