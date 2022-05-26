<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('categories')->insert([
           [ 'name' => 'shoes',
            'description'  => 'man',
           'created_at'=>now(),
           'updated_at'=>now()
        ],
            [
                'name' => 'the dress',
                'description'  => 'woman',
                'created_at'=>now(),
                'updated_at'=>now()

            ],
            [
                'name' => 'skirt',
                'description'  => 'childrens',
                'created_at'=>now(),
                'updated_at'=>now()

            ]
               ]
        );
    }
}
