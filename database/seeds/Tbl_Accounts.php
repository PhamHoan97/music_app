<?php

use Illuminate\Database\Seeder;

class Tbl_Accounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_accounts')->insert([
            ['username'=>'Tran Viet Huy', 'password'=>bcrypt('jessepinkman'), 'email'=>'huytran161297@gmail.com'],
            ['username'=>'Pham Hoan', 'password'=>bcrypt('hoandaubuoi'), 'email'=>'nhatvan97@gmail.com'],
            ['username'=>'Phung Van Hung', 'password'=>bcrypt('hungcon1997'), 'email'=>'hungcon1997@gmail.com'],
            ['username'=>'Bien Thanh Chung', 'password'=>bcrypt('chungbien'), 'email'=>'chungbien1997@gmail.com'],
        ]);
    }
}
