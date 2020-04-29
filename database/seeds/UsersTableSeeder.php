<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'email' => 'laravel@example.com',
            'password' => Hash::make('111111'),
            'name' => 'ララベル',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'sakura@kasugano.com',
            'password' => Hash::make('111111'),
            'name' => 'sakura',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);
    }
}
