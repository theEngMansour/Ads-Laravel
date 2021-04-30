<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdsTableSeeder::class,
            FavoriteTableSeeder::class,
            CountryTableSeeder::class,
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            CurrencyTableSeeder::class,
            ImageTableSeeder::class
        ]);

    }
}
