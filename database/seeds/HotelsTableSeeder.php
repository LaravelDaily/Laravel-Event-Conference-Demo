<?php

use App\Hotel;
use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = [
            [
                'name'          => 'Hotel 1',
                'description'   => '0.4 Mile from the Venue',
                'rating'        =>  5
            ],
            [
                'name'          => 'Hotel 2',
                'description'   => '0.5 Mile from the Venue',
                'rating'        =>  4
            ],
            [
                'name'          => 'Hotel 3',
                'description'   => '0.6 Mile from the Venue',
                'rating'        =>  3
            ],
        ];

        foreach($hotels as $key => $hotel)
        {
            $photo_id = $key+1;
            $hotel = Hotel::create($hotel);
            $hotel->addMedia(storage_path()."/seeders/hotels/$photo_id.jpg")->preservingOriginal()->toMediaCollection('photo');
        }
    }
}
