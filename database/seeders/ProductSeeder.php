<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $product =new \App\Models\Product([
            'name' => 'Product #1',
            'details' => 'Product #1 details'
        ]);
        $product ->save();
    }
}
