<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //此处编写定义填充器，然后 使用artisan命令执行数据添加 php artisan db:seed
        DB::table('users')->insert([
            'name' => 'longfei',
            'email' => '358211133@qq.com',
            'password' => '123456',
        ]);
    }
}
