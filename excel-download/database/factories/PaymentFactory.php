<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
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
            'company_name' => $this->faker->company,
            'pos_info' => $this->faker->randomDigit,
            'payment_method' => $this->getPaymentMethod(),
            'payment_status' => $this->getPaymentStatus(),
            'payment_history' => $this->faker->randomDigit,
            'payment_amount' => $this->faker->randomDigit,
            'due_amount' => $this->faker->randomDigit,
            'payment_approval' => $this->faker->randomDigit,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }

    public function getPaymentMethod(){
        $paymentMethods = ['Cash', 'Card', 'Cheque', 'Bkash', 'Rocket'];
        return $paymentMethods[rand(0,4)];
    }

    public function getPaymentStatus(){
        $paymentStatus = ['Paid', 'Unpaid'];
        return $paymentStatus[rand(0,1)];
    }

    public function random_date(){
        $min = strtotime('2023-11-01');
        $max = strtotime('2023-12-31');
        $val = rand($min, $max);
        return date('Y-m-d H:i:s', $val);
    }
}
