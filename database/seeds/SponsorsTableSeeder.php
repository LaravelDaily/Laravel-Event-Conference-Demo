<?php

use App\Sponsor;
use Illuminate\Database\Seeder;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsors = [
            [
                'name' => 'Strider',
                'link' => '#'
            ],
            [
                'name' => 'Runtastic',
                'link' => '#'
            ],
            [
                'name' => 'EditShare',
                'link' => '#'
            ],
            [
                'name' => 'InFocus',
                'link' => '#'
            ],
            [
                'name' => 'gategroup',
                'link' => '#'
            ],
            [
                'name' => 'Cadent',
                'link' => '#'
            ],
            [
                'name' => 'Ceph',
                'link' => '#'
            ],
            [
                'name' => 'Alitalia',
                'link' => '#'
            ],
        ];

        foreach($sponsors as $key => $sponsor)
        {
            $photo_id = $key + 1;
            $sponsor = Sponsor::create($sponsor);
            $sponsor->addMedia(storage_path()."/seeders/supporters/$photo_id.png")->preservingOriginal()->toMediaCollection('logo');
        }
    }
}
