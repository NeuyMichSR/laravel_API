<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'name' => 'Drink',
            'color' => 'red',
            'status' => '1'
        ]);
        Categories::create([
            'name' => 'Food',
            'color' => 'black',
            'status' => '1'
        ]);
        Categories::create([
            'name' => 'Computer',
            'color' => 'yellow',
            'status' => '0'
        ]);
        Categories::create([
            'name' => 'Phone',
            'color' => 'pink',
            'status' => '1'
        ]);
        Categories::create([
            'name' => 'Monitor',
            'color' => 'blue',
            'status' => '1'
        ]);
    }
}
