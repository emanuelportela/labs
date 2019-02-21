<?php

use Illuminate\Database\Seeder;
use App\Instagram;

class InstagramsTableSeeder extends Seeder {
    public function run() {

        // factory(App\Instagram::class, 12)->create();

        Instagram::create([
            'image' => 'byl47glKyjL2hK2ayvYNrlhEJM2b00arARUcV2sd.jpeg',
        ]);

        Instagram::create([
            'image' => 'mHS4fCLMSHbzPqlf8uuqYFbHJ7pEYn2u4tQ0n7Of.jpeg',
        ]);

        Instagram::create([
            'image' => 'N5ksGfckePiVkzB222ehM34Kg3OaIjk7NtIhEmrx.jpeg',
        ]);

        Instagram::create([
            'image' => 'OLvSHwJYoMbOSLLSkgh3LGh7TaWaoXaPbuckCieB.jpeg',
        ]);

        Instagram::create([
            'image' => 'Q1WdBKqkzmv84ynVj5x1se3K2nBZsUSlHBnW7FC2.jpeg',
        ]);

        Instagram::create([
            'image' => 'YdI7Fvvw8w5VsEhhxfjsyTtvQ9h0Jx77QGOdmBHq.jpeg',
        ]);

        Instagram::create([
            'image' => 'UvUFnchgfkgLelGWsJpNSbu9gHDxRY1IVXAykmfs.jpeg',
        ]);

        Instagram::create([
            'image' => 'hSGmmYESDLU0NCGr1lipgkSl8hRgdHTx6G3bpzZZ.jpeg',
        ]);

        Instagram::create([
            'image' => 'CvTO2XxClU2rjqbPtZPyb0rUEwwU7acNMPNG33sO.png',
        ]);

        Instagram::create([
            'image' => 'dtYCI54lM3bjwLtP3RHySxTrzr4jKvEDzqA7hSgg.jpeg',
        ]);

        Instagram::create([
            'image' => 'XK3g0XvbLMLRTxVG7ZR422g3Grh0tLUrwykCRExm.jpeg',
        ]);

        Instagram::create([
            'image' => 'Y2hQyRpnEAaHDIeIxrfGZkxLkCskFvpzfhkEGri7.jpeg',
        ]);

    }
}
