<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastname(),
            'first_name' => $this->faker->firstname(),
            'gender' => $this->faker->randomElement(['男性','女性','その他']),
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'address' =>$this->faker->address(),
            'building' =>$this->faker->secondaryAddress(),
            'categories ->$this->faker->randomElement(['商品のお届けについて','商品の交換について','商品トラブル','ショップへのお問い合わせ','その他'])'
            'detail' ->$this->faker->realText(120),
        ];
    }
}
