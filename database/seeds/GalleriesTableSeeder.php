<?php

use App\Gallery;
use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = Gallery::create([
            'name' => 'Event'
        ]);
        foreach(range(1,8) as $id)
        {
            $gallery->addMedia(storage_path()."/seeders/gallery/$id.jpg")->preservingOriginal()->toMediaCollection('photos');
        }
    }
}
