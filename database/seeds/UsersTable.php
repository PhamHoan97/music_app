<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Tran Viet Huy', 'email'=>'huytran161297@gmail.com', 'password'=>bcrypt('jessepinkman')],
            ['name'=>'Pham Hoan', 'email'=>'hoankhac123@gmail.com', 'password'=>bcrypt('hoankhac123')],
            ['name'=>'Phung Hung', 'email'=>'hungphung@gmail.com', 'password'=>bcrypt('hungphung123')],
            ['name'=>'Bien Chung', 'email'=>'chungbien@gmail.com', 'password'=>bcrypt('chungbien123')]
        ]);
    }
}
