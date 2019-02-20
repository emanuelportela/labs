<?php

use Illuminate\Database\Seeder;
use App\Profil;

class ProfilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profil::create([
            'name' => 'Portela',
            'firstname' => 'Emanuel',
            'gsm' => '0470202020',
            'pays' => 'Belgique',
            'adresse' => 'Place de la Minoterie 10',
            'ville' => 'Bruxelles',
            'user_id' => 1,
            'dateDeNaissance' => '1996-05-03 00:00:00',
            'image' => '5kKfz0Zml2FQNrwBEVctDmitKxfd5QAMbzpdahuW.jpeg',
        ]);
        Profil::create([
            'name' => 'Ben Abbess',
            'firstname' => 'Israa',
            'gsm' => '0470202020',
            'pays' => 'Belgique',
            'adresse' => 'Place de la Minoterie 10',
            'ville' => 'Bruxelles',
            'user_id' => 2,
            'dateDeNaissance' => '1994-06-11 00:00:00',
            'image' => 'YF0MfZFmVJ8CNNT7KZjwTOS1uMghTuBFQIWju9Di.jpeg',
        ]);
        Profil::create([
            'name' => 'Erraide',
            'firstname' => 'Younes',
            'gsm' => '0470202020',
            'pays' => 'Belgique',
            'adresse' => 'Place de la Minoterie 10',
            'ville' => 'Bruxelles',
            'user_id' => 3,
            'dateDeNaissance' => '1996-05-03 00:00:00',
            'image' => 'qz4dUYiFesg54n6DXRbX3oboDSgz8blhHHW1jzKb.jpeg',
        ]);
    }
}
