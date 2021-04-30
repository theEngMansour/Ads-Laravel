<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = "عقارات";
        DB::table('categories')->insert([
            'id' => 1,
            'name' => $cat,
            'slug' => str::limit($cat),
        ]);

        $cat = "وظائف";
        DB::table('categories')->insert([
            'id' => 2,
            'name' => $cat,
            'slug' => str::limit($cat),
        ]);

        $cat = "إلكترونيات";
        DB::table('categories')->insert([
            'id' => 3,
            'name' => $cat,
            'slug' => str::limit($cat),
        ]);

        $cat = "سيارات";
        DB::table('categories')->insert([
            'id' => 4,
            'name' =>$cat,
            'slug' => str::limit($cat),
        ]);

        $cat = "أثاث";
        DB::table('categories')->insert([
            'id' => 5,
            'name' =>$cat,
            'slug' => str::limit($cat),
        ]);

        $cat = "مال و أعمال";
        DB::table('categories')->insert([
            'id' =>6,
            'name' => $cat,
            'slug' => str::limit($cat),
        ]);

        $cat = "مواد و معدات";
        DB::table('categories')->insert([
            'id' => 7,
            'name' => $cat,
            'slug' => str::limit($cat),
        ]);
    }
}
