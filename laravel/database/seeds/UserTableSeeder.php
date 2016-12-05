<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //此处编写定义填充器，然后 使用artisan命令执行数据添加 php artisan db:seed
      DB::table('users')->insert([
          'name' => 'long123',
          'email' => '35234533@qq.com',
          'password' => '123456',
      ]);
    }
}
