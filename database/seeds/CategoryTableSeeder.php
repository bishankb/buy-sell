<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Automobiles',
                'slug' => str_slug('Automobiles'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Beauty & Health',
                'slug' => str_slug('Beauty & Health'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );


        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Book & Stationary',
                'slug' => str_slug('Book & Stationary'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Computer & Equipments',
                'slug' => str_slug('Computer & Equipments'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Electronics',
                'slug' => str_slug('Electronics'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Fashion Wear',
                'slug' => str_slug('Fashion Wear'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Food & Drinks',
                'slug' => str_slug('Food & Drinks'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Home Appliances',
                'slug' => str_slug('Home Appliances'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Mobile & Accessories',
                'slug' => str_slug('Mobile & Accessories'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Music Instruments',
                'slug' => str_slug('Music Instruments'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Pet & Pet Care',
                'slug' => str_slug('Pet & Pet Care'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Real State',
                'slug' => str_slug('Real State'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Services',
                'slug' => str_slug('Services'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Sport & Fitness',
                'slug' => str_slug('Sport & Fitness'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Toys & Games',
                'slug' => str_slug('Toys & Games'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Travel, Tour & Packages',
                'slug' => str_slug('Travel, Tour & Packages'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        Category::create(
            [
                'category_for' => 'product',
                'title'  => 'Others',
                'slug' => str_slug('Others'),
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );
    }
}
