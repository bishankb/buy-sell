<?php

use Illuminate\Database\Seeder;
use App\SubCategory;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Bike',
                'slug' => str_slug('Bike'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Car',
                'slug' => str_slug('Car'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Scooter',
                'slug' => str_slug('Scooter'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Jeep',
                'slug' => str_slug('Jeep'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Micro Bus',
                'slug' => str_slug('Micro Bus'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Mini Bus',
                'slug' => str_slug('Mini Bus'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

         SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Mopade',
                'slug' => str_slug('Mopade'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Tipper',
                'slug' => str_slug('Tipper'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Tourist Bus',
                'slug' => str_slug('Tourist Bus'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Truck',
                'slug' => str_slug('Truck'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Van',
                'slug' => str_slug('Van'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Part & Accessories',
                'slug' => str_slug('Part & Accessories'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other'),
                'category_id' => 1,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Body Care',
                'slug' => str_slug('Body Care'),
                'category_id' => 2,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Cosmetics & Skin Care',
                'slug' => str_slug('Cosmetics & Skin Care'),
                'category_id' => 2,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Eye Care',
                'slug' => str_slug('Eye Care'),
                'category_id' => 2,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Face Care',
                'slug' => str_slug('Face Care'),
                'category_id' => 2,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Medical & Health Tools',
                'slug' => str_slug('Medical & Health Tools'),
                'category_id' => 2,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Men Grooming Tools',
                'slug' => str_slug('Men Grooming Tools'),
                'category_id' => 2,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Women Grooming Tools',
                'slug' => str_slug('Women Grooming Tools'),
                'category_id' => 2,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-1'),
                'category_id' => 2,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Children & School',
                'slug' => str_slug('Children & School'),
                'category_id' => 3,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Comics & Mangas',
                'slug' => str_slug('Comics & Mangas'),
                'category_id' => 3,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Educational Textbook',
                'slug' => str_slug('Educational Textbook'),
                'category_id' => 3,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Interactive & Video Learning',
                'slug' => str_slug('Interactive & Video Learning'),
                'category_id' => 3,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Magazine & Newspaper',
                'slug' => str_slug('Magazine & Newspaper'),
                'category_id' => 3,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Novel & Biography',
                'slug' => str_slug('Novel & Biography'),
                'category_id' => 3,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Technological Book',
                'slug' => str_slug('Technological Book'),
                'category_id' => 3,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Stationery Items',
                'slug' => str_slug('Stationery Items'),
                'category_id' => 3,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-2'),
                'category_id' => 3,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Desktop PC',
                'slug' => str_slug('Desktop PC'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Desktop Accessories',
                'slug' => str_slug('Desktop Accessories'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Graphics Card',
                'slug' => str_slug('Graphics Card'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Gamepad & Joystick',
                'slug' => str_slug('Gamepad & Joystick'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Laptop',
                'slug' => str_slug('Laptop'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Laptop Accessories',
                'slug' => str_slug('Laptop Accessories'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Monitors',
                'slug' => str_slug('Monitors'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Networking Equipments',
                'slug' => str_slug('Networking Equipments'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Printer & Scanner',
                'slug' => str_slug('Printer & Scanner'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Software',
                'slug' => str_slug('Software'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Storage & Optical Devices',
                'slug' => str_slug('Storage & Optical Devices'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'TV Card',
                'slug' => str_slug('TV Card'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-3'),
                'category_id' => 4,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Audio Equipments',
                'slug' => str_slug('Audio Equipments'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Video Equipments',
                'slug' => str_slug('Video Equipments'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Camera Lens & Accesories',
                'slug' => str_slug('Camera Lens & Accesories'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Digital Camera',
                'slug' => str_slug('Digital Camera'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'DSLR Camera',
                'slug' => str_slug('DSLR Camera'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Film Camera & Tape Camcorder',
                'slug' => str_slug('Film Camera & Tape Camcorder'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Handycam',
                'slug' => str_slug('Handycam'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Headphone & Earphone',
                'slug' => str_slug('Headphone & Earphone'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Ipod & Mp3 Players',
                'slug' => str_slug('Ipod & Mp3 Players'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Portable & Bluetooth Speakers',
                'slug' => str_slug('Portable & Bluetooth Speakers'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Projectors',
                'slug' => str_slug('Projectors'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Set-Top Box',
                'slug' => str_slug('Set-Top Box'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Smart Box & Cast',
                'slug' => str_slug('Smart Box & Cast'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Television',
                'slug' => str_slug('Television'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Radio',
                'slug' => str_slug('Radio'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Refrigerator',
                'slug' => str_slug('Refrigerator'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-4'),
                'category_id' => 5,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Baby & Children Accesories',
                'slug' => str_slug('Baby & Children Accesories'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Baby & Children Clothes',
                'slug' => str_slug('Baby & Children Clothes'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Bags & Luggage',
                'slug' => str_slug('Bags & Luggage'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Jewellery',
                'slug' => str_slug('Jewellery'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Men Accessories',
                'slug' => str_slug('Men Accessories'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Men Clothes',
                'slug' => str_slug('Men Clothes'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Men Glasses',
                'slug' => str_slug('Men Glasses'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Men Shoes',
                'slug' => str_slug('Men Shoes'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Men Watches',
                'slug' => str_slug('Men Watches'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Women Accessories',
                'slug' => str_slug('Women Accessories'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Women Clothes',
                'slug' => str_slug('Women Clothes'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Women Glasses',
                'slug' => str_slug('Women Glasses'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Women Shoes',
                'slug' => str_slug('Women Shoes'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Women Watches',
                'slug' => str_slug('Women Watches'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-5'),
                'category_id' => 6,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Cakes & Cookies',
                'slug' => str_slug('Cakes & Cookies'),
                'category_id' => 7,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Cold Drinks',
                'slug' => str_slug('Cold Drinks'),
                'category_id' => 7,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Fast Food',
                'slug' => str_slug('Fast Food'),
                'category_id' => 7,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Grocery Items',
                'slug' => str_slug('Grocery Items'),
                'category_id' => 7,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Home-Made Food',
                'slug' => str_slug('Home-Made Food'),
                'category_id' => 7,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Hard Drinks',
                'slug' => str_slug('Hard Drinks'),
                'category_id' => 7,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-6'),
                'category_id' => 7,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Antiques & Collectables',
                'slug' => str_slug('Antiques & Collectables'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Art & Handicrafts',
                'slug' => str_slug('Art & Handicrafts'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Bathroom & Plumbing',
                'slug' => str_slug('Bathroom & Plumbing'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Cooler & Heater',
                'slug' => str_slug('Cooler & Heater'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Construction Materials',
                'slug' => str_slug('Construction Materials'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Gas Stove',
                'slug' => str_slug('Gas Stove'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Home Decoration & Interiors',
                'slug' => str_slug('Home Decoration & Interiors'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Home Furniture',
                'slug' => str_slug('Home Furniture'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Invertor & Generator',
                'slug' => str_slug('Invertor & Generator'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Kitchen Appliances',
                'slug' => str_slug('Kitchen Appliances'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Kitchen Utensils',
                'slug' => str_slug('Kitchen Utensils'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Lightning, Solars & Electrical Devices',
                'slug' => str_slug('Lightning, Solars & Electrical Devices'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Linens & Mattress',
                'slug' => str_slug('Linens & Mattress'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Microware oven',
                'slug' => str_slug('Microware oven'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        
        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other Home Appliances',
                'slug' => str_slug('Other Home Appliances'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-7'),
                'category_id' => 8,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Battery',
                'slug' => str_slug('Battery'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Charger',
                'slug' => str_slug('Charger'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Cover & Cases',
                'slug' => str_slug('Cover & Cases'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Data Cables',
                'slug' => str_slug('Data Cables'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Gamepad, Triggers & Joystick',
                'slug' => str_slug('Gamepad, Triggers & Joystick'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Headsets & Earphones',
                'slug' => str_slug('Headsets & Earphones'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Memory Cards',
                'slug' => str_slug('Memory Cards'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Mobile Apps & Games',
                'slug' => str_slug('Mobile Apps & Games'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Mobile Handset',
                'slug' => str_slug('Mobile Handset'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Mobile Parts',
                'slug' => str_slug('Mobile Parts'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Mobile Unlock & Upgrade',
                'slug' => str_slug('Mobile Unlock & Upgrade'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Power Bank',
                'slug' => str_slug('Power Bank'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Screen Protector',
                'slug' => str_slug('Screen Protector'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Selfie Monopod',
                'slug' => str_slug('Selfie Monopod'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Smart Watch & Bands',
                'slug' => str_slug('Smart Watch & Bands'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Ipads & Tablets',
                'slug' => str_slug('Ipads & Tablets'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Ipads & Tablets Accessories',
                'slug' => str_slug('Ipads & Tablets Accessories'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'VR Box',
                'slug' => str_slug('VR Box'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-8'),
                'category_id' => 9,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Amp & Speakers',
                'slug' => str_slug('Amp & Speakers'),
                'category_id' => 10,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'DJ Gear & Lighting',
                'slug' => str_slug('DJ Gear & Lighting'),
                'category_id' => 10,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Drum Set',
                'slug' => str_slug('Drum Set'),
                'category_id' => 10,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Guitars',
                'slug' => str_slug('Guitars'),
                'category_id' => 10,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Keboard & Piano',
                'slug' => str_slug('Keboard & Piano'),
                'category_id' => 10,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Microphones',
                'slug' => str_slug('Microphones'),
                'category_id' => 10,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Mixer & Studio Equipments',
                'slug' => str_slug('Mixer & Studio Equipments'),
                'category_id' => 10,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-9'),
                'category_id' => 10,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Aquarium & Fish Accessories',
                'slug' => str_slug('Aquarium & Fish Accessories'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Kennel & Dog Accessories',
                'slug' => str_slug('Kennel & Dog Accessories'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Dogs',
                'slug' => str_slug('Dogs'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Dog Food',
                'slug' => str_slug('Dog Food'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Fish',
                'slug' => str_slug('Fish'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Fish Food',
                'slug' => str_slug('Fish Food'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other Pets',
                'slug' => str_slug('Other Pets'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other Pet Foods',
                'slug' => str_slug('Other Pet Foods'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Ohter Services',
                'slug' => str_slug('Ohter Services'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-10'),
                'category_id' => 11,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Commercial Property',
                'slug' => str_slug('Commercial Property'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Flat & Appartment - For Sale',
                'slug' => str_slug('Flat & Appartment - For Sale'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Flat & Appartment - For Rent',
                'slug' => str_slug('Flat & Appartment - For Rent'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'House - For Sale',
                'slug' => str_slug('House - For Sale'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'House - For Rent',
                'slug' => str_slug('House - For Rent'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Hotel, Lodge & Guest House - For Booking',
                'slug' => str_slug('Hotel, Lodge & Guest House - For Booking'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Hotel, Lodge & Guest House - For Sale',
                'slug' => str_slug('Hotel, Lodge & Guest House - For Sale'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Land - For Sale',
                'slug' => str_slug('Land - For Sale'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Land - For Rent',
                'slug' => str_slug('Land - For Rent'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Shutter & Shop Space - For Sale',
                'slug' => str_slug('Shutter & Shop Space - For Sale'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Shutter & Shop Space - For Rent',
                'slug' => str_slug('Shutter & Shop Space - For Rent'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-11'),
                'category_id' => 12,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Advertising, Printing & Publication',
                'slug' => str_slug('Advertising, Printing & Publication'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Coaching & Tutors',
                'slug' => str_slug('Coaching & Tutors'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Computer - Sales & Repair',
                'slug' => str_slug('Computer - Sales & Repair'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Computer Courses',
                'slug' => str_slug('Computer Courses'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Electronics Repair',
                'slug' => str_slug('Electronics Repair'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Event Planner & Caterers',
                'slug' => str_slug('Event Planner & Caterers'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Foreign Language Classes',
                'slug' => str_slug('Foreign Language Classes'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'IELTS-GRE-TOEFEL-SAT-PTE Classes',
                'slug' => str_slug('IELTS-GRE-TOEFEL-SAT-PTE Classes'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Home Construct & Design',
                'slug' => str_slug('Home Construct & Design'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Home Repair & Maintainence',
                'slug' => str_slug('Home Repair & Maintainence'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Movers Courier & Transport',
                'slug' => str_slug('Movers Courier & Transport'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Mobile Application Devlopment',
                'slug' => str_slug('Mobile Application Devlopment'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Music-Video-Photography',
                'slug' => str_slug('Music-Video-Photography'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Software Design & Devlopment',
                'slug' => str_slug('Software Design & Devlopment'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Visa Processing & Migration',
                'slug' => str_slug('Visa Processing & Migration'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Writing-Designing-Translating',
                'slug' => str_slug('Writing-Designing-Translating'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Web Design & Devlopment',
                'slug' => str_slug('Web Design & Devlopment'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-12'),
                'category_id' => 13,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Bicycles',
                'slug' => str_slug('Bicycles'),
                'category_id' => 14,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Bicycle Parts & Accessories',
                'slug' => str_slug('Bicycles Parts & Accessories'),
                'category_id' => 14,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Fitness & Gym Equipment',
                'slug' => str_slug('Fitness & Gym Equipment'),
                'category_id' => 14,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Fitness Supplements',
                'slug' => str_slug('Fitness Supplements'),
                'category_id' => 14,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-13'),
                'category_id' => 14,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Children Toys & Dolls',
                'slug' => str_slug('Children Toys & Dolls'),
                'category_id' => 14,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Educational Toys',
                'slug' => str_slug('Educational Toys'),
                'category_id' => 14,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Gaming Accessories',
                'slug' => str_slug('Gaming Accessories'),
                'category_id' => 15,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Gaming Console',
                'slug' => str_slug('Gaming Console'),
                'category_id' => 15,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Gaming Disc',
                'slug' => str_slug('Gaming Disc'),
                'category_id' => 15,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'General Toys',
                'slug' => str_slug('General Toys'),
                'category_id' => 15,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Remote Controlled Toys',
                'slug' => str_slug('Remote Controlled Toys'),
                'category_id' => 15,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-14'),
                'category_id' => 15,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Air Tickets',
                'slug' => str_slug('Air Tickets'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Bus Tickets',
                'slug' => str_slug('Bus Tickets'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Bungee Jump Package',
                'slug' => str_slug('Bungee Jump Package'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Canyoning Package',
                'slug' => str_slug('Canyoning Package'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Day Trip & Excursion',
                'slug' => str_slug('Day Trip & Excursion'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Hiking Package',
                'slug' => str_slug('Hiking Package'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Hotel & Home Stay',
                'slug' => str_slug('Hotel & Home Stay'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Paragliding Package',
                'slug' => str_slug('Paragliding Package'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Skydiving Package',
                'slug' => str_slug('Skydiving Package'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Tour Package - Domestic',
                'slug' => str_slug('Tour Package - Domestic'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Tour Package - International',
                'slug' => str_slug('Tour Package - International'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Trekking Package',
                'slug' => str_slug('Trekking Package'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Vehicle Rental',
                'slug' => str_slug('Vehicle Rental'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Zip Flying Package',
                'slug' => str_slug('Zip Flying Package'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Travel Accessories',
                'slug' => str_slug('Travel Accessories'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );

        SubCategory::create(
            [
                'sub_category_for' => 'product',
                'title'  => 'Other',
                'slug' => str_slug('Other-15'),
                'category_id' => 16,
                'status' => 1,
                'home_visibility' => 0,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );
    }
}