<?php

use App\Amenity;
use Illuminate\Database\Seeder;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = [
            [
                'name' => 'Regular Seating'
            ],
            [
                'name' => 'Coffee Break'
            ],
            [
                'name' => 'Custom Badge'
            ],
            [
                'name' => 'Community Access'
            ],
            [
                'name' => 'Workshop Access'
            ],
            [
                'name' => 'After Party'
            ],
        ];

        foreach($amenities as $amenity)
        {
            Amenity::create($amenity);
        }
    }
}
