<?php

use Illuminate\Database\Seeder;
use App\ContactUs;

class ContactUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	ContactUs::create(
            [
				'name1'       => 'Akash Giri',
				'name2'       => 'Ashish Giri', 
				'phone1'      => '9806500070', 
				'phone2'      => '9846728580',
				'google_plus' => 'https://plus.google.com/103354720739296844275',
                'address'     => 'Mohariya Tole, Pokhara - 1, Nepal',
                'email'       => 'nepal.crescent@gmail.com',
            ]
        );
    }
}
