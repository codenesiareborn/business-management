<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 19; $i++) { 
            DB::table('products')->insert([
                'created_at' => now(),
            ]);
        }
    }
}
