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
        factory(App\Category::class,5)->create()->each(function($cat){
            $cat->products()
                ->saveMany(
                    factory(App\Product::class,rand(1,5))->make()
                );
        });

    }
}
