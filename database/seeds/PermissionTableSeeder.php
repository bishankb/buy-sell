<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
        	'dashboards',
        	'users',
            'roles',
            'categories',
            'sub_categories',
            'products',
            'faqs',
            'cities',
            'countries'
        ];

        foreach ($permissions as $key => $permission) {
        	Artisan::call('crescent:auth:permission', ['name' => $permission]);
        }

    }
}
