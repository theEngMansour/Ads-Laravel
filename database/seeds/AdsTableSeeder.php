<?php
use Illuminate\Support\Str; 
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        $title=$faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'        =>1,
            'title'     =>$title,
            'slug'      =>$slug,
            'text'      =>$faker->text,
            'price'     =>$faker->randomNumber(4),
            'user_id'   =>rand(1,5),
            'category_id'=> 5,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $faker=Faker::create();
        $title=$faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'        =>2,
            'title'     =>$title,
            'slug'      =>$slug,
            'text'      =>$faker->text,
            'price'     =>$faker->randomNumber(4),
            'user_id'   =>rand(1,5),
            'category_id'=> 5,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $faker=Faker::create();
        $title=$faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'        =>3,
            'title'     =>$title,
            'slug'      =>$slug,
            'text'      =>$faker->text,
            'price'     =>$faker->randomNumber(4),
            'user_id'   =>rand(1,5),
            'category_id'=> 5,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $faker=Faker::create();
        $title=$faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'        =>4,
            'title'     =>$title,
            'slug'      =>$slug,
            'text'      =>$faker->text,
            'price'     =>$faker->randomNumber(4),
            'user_id'   =>rand(1,5),
            'category_id'=> 5,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $faker=Faker::create();
        $title=$faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'        =>5,
            'title'     =>$title,
            'slug'      =>$slug,
            'text'      =>$faker->text,
            'price'     =>$faker->randomNumber(4),
            'user_id'   =>rand(1,5),
            'category_id'=> 5,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $faker=Faker::create();
        $title=$faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'        =>6,
            'title'     =>$title,
            'slug'      =>$slug,
            'text'      =>$faker->text,
            'price'     =>$faker->randomNumber(4),
            'user_id'   =>rand(1,5),
            'category_id'=> 5,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $faker=Faker::create();
        $title=$faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'        =>7,
            'title'     =>$title,
            'slug'      =>$slug,
            'text'      =>$faker->text,
            'price'     =>$faker->randomNumber(4),
            'user_id'   =>rand(1,5),
            'category_id'=> 5,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $faker=Faker::create();
        $title=$faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'        =>8,
            'title'     =>$title,
            'slug'      =>$slug,
            'text'      =>$faker->text,
            'price'     =>$faker->randomNumber(4),
            'user_id'   =>rand(1,5),
            'category_id'=> 5,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);
    
        $title = $faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'         =>9,
            'title'      => $title,
            'slug'       => $slug,
            'text'       => $faker->text,
            'price'      => $faker->randomNumber(4),
            'user_id'    => rand(1, 5),
            'category_id'=> 4,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $title = $faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'         =>10,
            'title'      => $title,
            'slug'       => $slug,
            'text'       => $faker->text,
            'price'      => $faker->randomNumber(4),
            'user_id'    => rand(1, 5),
            'category_id'=> 4,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $title = $faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'         =>11,
            'title'      => $title,
            'slug'       => $slug,
            'text'       => $faker->text,
            'price'      => $faker->randomNumber(4),
            'user_id'    => rand(1, 5),
            'category_id'=> 4,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $title = $faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'         =>12,
            'title'      => $title,
            'slug'       => $slug,
            'text'       => $faker->text,
            'price'      => $faker->randomNumber(4),
            'user_id'    => rand(1, 5),
            'category_id'=> 4,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $title = $faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'         =>13,
            'title'      => $title,
            'slug'       => $slug,
            'text'       => $faker->text,
            'price'      => $faker->randomNumber(4),
            'user_id'    => rand(1, 5),
            'category_id'=> 4,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $title = $faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'         =>14,
            'title'      => $title,
            'slug'       => $slug,
            'text'       => $faker->text,
            'price'      => $faker->randomNumber(4),
            'user_id'    => rand(1, 5),
            'category_id'=> 1,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $title = $faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'         =>15,
            'title'      => $title,
            'slug'       => $slug,
            'text'       => $faker->text,
            'price'      => $faker->randomNumber(4),
            'user_id'    => rand(1, 5),
            'category_id'=> 1,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $title = $faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'         =>16,
            'title'      => $title,
            'slug'       => $slug,
            'text'       => $faker->text,
            'price'      => $faker->randomNumber(4),
            'user_id'    => rand(1, 5),
            'category_id'=> 7,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);

        $title = $faker->sentence;
        $slug = str::limit($title);
        DB::table('ads')->insert([
            'id'         =>17,
            'title'      => $title,
            'slug'       => $slug,
            'text'       => $faker->text,
            'price'      => $faker->randomNumber(4),
            'user_id'    => rand(1, 5),
            'category_id'=> 7,
            'country_id' => rand(1, 6),
            'currency_id'=> rand(1, 6),
        ]);
    }
}
