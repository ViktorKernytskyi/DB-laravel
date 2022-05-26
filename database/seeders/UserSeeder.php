<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
                [
                    'name' => 'Petro',
                    'email'  => 'Petro@ukr.net',
                    'password'=>'12345',

                    'created_at'=>now(),
                    'updated_at'=>now()
                ],
                [
                    'name' => 'Ivan',
                    'email'  => 'Ivan@ukr.net',
                    'password'=>'12345',

                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    'name' => 'Stepan',
                    'email'  => 'Stepan@ukr.net',
                    'password'=>'12345',

                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    'name' => 'Ivanna',
                    'email'  => 'Ivanna@ukr.net',
                    'password'=>'12345',

                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    'name' => 'Ganna',
                    'email'  => 'Ganna@ukr.net',
                    'password'=>'12345',

                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    'name' => 'Taras',
                    'email'  => 'Taras@ukr.net',
                    'password'=>'12345',

                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    'name' => 'Mukola',
                    'email'  => 'Mukola@ukr.net',
                    'password'=>'12345',

                    'created_at'=>now(),
                    'updated_at'=>now()

                ],

            ]
        );
    }
}
