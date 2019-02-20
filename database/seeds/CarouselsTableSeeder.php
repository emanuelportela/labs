<?php

use Illuminate\Database\Seeder;
use App\Carousel;

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Carousel::create([
            'image' => 'cLkyKecTUrZWhqYIoBUbduRyvSf5GdL2bUmWin2e.jpeg',
        ]);
        Carousel::create([
            'image' => 'r7rOVFroGB6lnHnGipodm4JVT9v0JH69x1qs4YE0.jpeg',
        ]);
    }
}
