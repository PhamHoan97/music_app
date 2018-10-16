<?php

use Illuminate\Database\Seeder;

class Tbl_Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['code_category'=>1,'name_category'=>'User'],
            ['code_category'=>2, 'name_category'=>'Singer'],
            ['code_category'=>3, 'name_category'=>'Artist'],
        ]);
    }
}
