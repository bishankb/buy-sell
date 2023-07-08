<?php

use Illuminate\Database\Seeder;
use App\UserProfile;

class UserProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProfile::create(
            [
                'user_id'       => 1,
                'phone1'        => '9806543559',
                'address'       => 'Mohariya Tole',
                'city_id'       => 1,
                'country_id'    => 1
            ]
        );

        UserProfile::create(
            [
                'user_id'       => 2,
                'phone1'        => '9846467125',
                'address'       => 'Naya Baneshwor',
                'city_id'       => 1,
                'country_id'    => 1
            ]
        );

        UserProfile::create(
            [
                'user_id'       => 3,
                'phone1'        => '9806500070',
                'address'       => 'Mohariya Tole',
                'city_id'       => 1,
                'country_id'    => 1
            ]
        );

        UserProfile::create(
            [
                'user_id'       => 4,
                'phone1'        => '9846728580',
                'address'       => 'Dhumbarahi',
                'city_id'       => 1,
                'country_id'    => 1
            ]
        );

        UserProfile::create(
            [
                'user_id'       => 5,
                'phone1'        => '9846728580',
                'address'       => 'Mohariya Tole',
                'city_id'       => 1,
                'country_id'    => 1
            ]
        );
    }
}
