<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('categories')->insert([
            'name'=>'Baby'
        ]);
        DB::table('categories')->insert([
            'name'=>'Beer/Wines/Spirits'
        ]);
        DB::table('categories')->insert([
            'name'=>'Beverges'
        ]);

        DB::table('categories')->insert([
            'name'=>'Food'
        ]);

        DB::table('categories')->insert([
            'name'=>'Household Items'
        ]);
        DB::table('categories')->insert([
            'name'=>'Footware'
        ]);
        DB::table('categories')->insert([
            'name'=>'Clothes'
        ]);
        DB::table('categories')->insert([
            'name'=>'Others'
        ]);

        
    }
}
