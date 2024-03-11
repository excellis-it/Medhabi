<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddHeaderMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'About',
                'parent_id' => 0,
                'slug' => null,
                'type' => 'header',
                'status' => 1,
                'is_custom_link' => 0,
                'is_delete' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Academic',
                'parent_id' => 0,
                'slug' => null,
                'type' => 'header',
                'status' => 1,
                'is_custom_link' => 0,
                'is_delete' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Admissions',
                'parent_id' => 0,
                'slug' => null,
                'type' => 'header',
                'status' => 1,
                'is_custom_link' => 0,
                'is_delete' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Schools',
                'parent_id' => 0,
                'slug' => null,
                'type' => 'header',
                'status' => 1,
                'is_custom_link' => 0,
                'is_delete' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Collaborations',
                'parent_id' => 0,
                'slug' => null,
                'type' => 'header',
                'status' => 1,
                'is_custom_link' => 0,
                'is_delete' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Happenings',
                'parent_id' => 0,
                'slug' => null,
                'type' => 'header',
                'status' => 1,
                'is_custom_link' => 0,
                'is_delete' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
