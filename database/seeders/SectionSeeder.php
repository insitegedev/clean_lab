<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pages array
        $pages = [
            [
                'slug' => 'why_us',
                'status' => true
            ],
            [
                'slug' => 'how_works',
                'status' => true
            ],
            [
                'slug' => 'clean_lub',
                'status' => true
            ],
        ];
        // Insert pages
        Page::insert($pages);
    }
}
