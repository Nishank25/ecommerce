<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'TV',
                'slug' => 'tv',
                'category_type' => 'sub_category',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Mobile Phone',
                'slug' => 'mobile',
                'category_type' => 'sub_category',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Tablet',
                'slug' => 'tablet',
                'category_type' => 'sub_category',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Laptop',
                'slug' => 'laptop',
                'category_type' => 'sub_category',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Speaker',
                'slug' => 'speaker',
                'category_type' => 'sub_category',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Chair',
                'slug' => 'chair',
                'category_type' => 'sub_category',
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Table',
                'slug' => 'table',
                'category_type' => 'sub_category',
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Beds',
                'slug' => 'bed',
                'category_type' => 'sub_category',
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Wardrobes',
                'slug' => 'wardrobes',
                'category_type' => 'sub_category',
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Bench',
                'slug' => 'bench',
                'category_type' => 'sub_category',
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
