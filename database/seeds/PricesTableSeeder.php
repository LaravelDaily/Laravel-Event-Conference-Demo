<?php

use App\Price;
use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
            [
                'name'  => 'Standard Access',
                'price' => 150
            ],
            [
                'name'  => 'Pro Access',
                'price' => 250
            ],
            [
                'name'  => 'Premium Access',
                'price' => 350
            ],
        ];

        foreach($prices as $price)
        {
            Price::create($price);
        }
    }
}
