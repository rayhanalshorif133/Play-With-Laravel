<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->random_date();
        return [
                'serial_no' => $this->faker->randomDigit,
                'company_name' => $this->faker->company,
                'pos_id' => $this->faker->randomDigit,
                'pos_name' => $this->faker->name,
                'email' => $this->faker->email,
                'phone_number' => $this->faker->phoneNumber,
                'total_sales' => $this->faker->randomDigit,
                'total_due' => $this->faker->randomDigit,
                'created_at' => $date,
                'updated_at' => $date,
        ];
    }

    public function random_date(){
        $min = strtotime('2023-11-01');
        $max = strtotime('2023-12-31');
        $val = rand($min, $max);
        return date('Y-m-d H:i:s', $val);
    }
}
