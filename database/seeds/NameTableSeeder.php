<?php

use Illuminate\Database\Seeder;
use App\Name;
class NameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Name::create([
            'first'     => 'Brye',
            'middle'    => 'Plata',
            'last'      => 'Ebora'
        ]);

        Name::create([
            'first'     => 'Mary',
            'middle'    => 'Goal',
            'last'      => 'Gregana'
        ]);

        Name::create([
            'first'     => 'Khevin',
            'middle'    => 'Alim',
            'last'      => 'Del Valle'
        ]);

        Name::create([
            'first'     => 'Nicko',
            'middle'    => 'Fel',
            'last'      => 'Bontigao'
        ]);        

        Name::create([
            'first'     => 'Felix',
            'middle'    => 'Bon',
            'last'      => 'Bontigao'
        ]);

        Name::create([
            'first'     => 'Julius',
            'middle'    => 'Cesar',
            'last'      => 'Lo'
        ]);

        Name::create([
            'first'     => 'May',
            'middle'    => 'Cruz',
            'last'      => 'Martin'
        ]);

        Name::create([
            'first'     => 'Hannie',
            'middle'    => 'Alim',
            'last'      => 'Villegas'
        ]);
    }
}
