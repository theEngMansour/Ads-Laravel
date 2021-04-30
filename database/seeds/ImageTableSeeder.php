<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'ad_id'      => 1,
            'image'      => "pexels-photo-1148955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 1,
            'image'      => "pexels-photo-1166420.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 2,
            'image'      => "pexels-photo-276534.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 2,
            'image'      => "pexels-photo-276661.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 3,
            'image'      => "pexels-photo-276583.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 3,
            'image'      => "leather-sofa-recliner-sofa-furniture-lounge-suite-65941.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 4,
            'image'      => "pexels-photo-932095.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 5,
            'image'      => "armchair-chairs-clean-923192.jpg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 5,
            'image'      => "armchair-chairs-clean-923192.jpg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 5,
            'image'      => "pexels-photo-220749.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 6,
            'image'      => "pexels-photo-302879.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 7,
            'image'       => "pexels-photo-461452.png",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 8,
            'image'       => "pexels-photo-788946.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 9,
            'image'       => "pexels-photo-225841.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 10,
            'image'       => "pexels-photo-119435.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 11,
            'image'       => "pexels-photo-116675.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 12,
            'image'       => "pexels-photo-193021.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 13,
            'image'       => "pexels-photo-170811.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 13,
            'image'       => "pexels-photo-244206.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 14,
            'image'       => "pexels-photo-1105754.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 14,
            'image'       => "pexels-photo-276554.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 14,
            'image'       => "pexels-photo-271724.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 15,
            'image'       => "pexels-photo-280235.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 15,
            'image'       => "pexels-photo-259962.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 16,
            'image'       => "water-pump-industrial-industry-pump.jpg",
        ]);

        DB::table('images')->insert([
            'ad_id'      => 17,
            'image'       => "beer-machine-alcohol-brewery-159291.jpeg",
        ]);

    }
    
}
