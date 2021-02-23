<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Pages array
        $pages = [
            [
                'slug' => 'home',
                'status' => true
            ],
            [
                'slug' => 'about-us',
                'status' => true
            ],
            [
                'slug' => 'contact-us',
                'status' => true
            ],
            [
                'slug' => 'vacancy',
                'status' => true
            ],
            [
                'slug' => 'services',
                'status' => true
            ],
            [
                'slug' => 'service-detail',
                'status' => true
            ],
        ];

        // Settings Array
        $settings = [
            [
                'key' => 'phone',
            ],
            [
                'key' => 'contact_email',
            ],
            [
                'key' => 'address',
            ],
            [
                'key' => 'facebook',
            ],
            [
                'key' => 'instagram',
            ],
        ];

        // Insert pages
        Page::insert($pages);

        // Insert settings
        Setting::insert($settings);
    }
}
