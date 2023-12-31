<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(
            [
                'name'  => 'Nepal',
                'order' => 1, 
            ]
        );

        Country::create(
            [
                'name'  => 'India',
                'order' => 2, 
            ]
        );

        Country::create(
            [
                'name'  => 'China',
                'order' => 3, 
            ]
        );

        Country::create(
            [
                'name'  => 'Other',
                'order' => 4, 
            ]
        );
    }
}
