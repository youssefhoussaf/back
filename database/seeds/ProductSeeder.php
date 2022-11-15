<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++)
            DB::table('products')->insert([
                'name' => 'product ' . Str::random(5),
                'price' => rand(0,1000),
                'qte' => rand(0,1000),
            ]);
        
    }
}
