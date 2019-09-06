<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class RootCategorySeeders extends Seeder
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
                'name' => 'Electronics',
                'slug' => 'electronics',
                'category_type' => 'root_category',
                'category_id' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Furniture',
                'slug' => 'furniture',
                'category_type' => 'root_category',
                'category_id' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
         ]);
    }
}
