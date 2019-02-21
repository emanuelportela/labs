<?php

use Illuminate\Database\Seeder;
use App\Instagram;

class InstagramsTableSeeder extends Seeder {
    public function run() {
        Instagram::create([
            'image' => 'cLkyKecTUrZWhqYIoBUbduRyvSf5GdL2bUmWin2e.jpeg',
        ]);
        Instagram::create([
            'image' => 'r7rOVFroGB6lnHnGipodm4JVT9v0JH69x1qs4YE0.jpeg',
        ]);
    }
}
