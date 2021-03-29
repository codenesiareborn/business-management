<?php

use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 19; $i++) { 
            DB::table('mitras')->insert([
                'created_at' => now(),
            ]);
        }
    }
}
