<?php

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 19; $i++) { 
            DB::table('invoices')->insert([
                'company_id' => rand(1,19),
                'product_id' => rand(1,19),
                'mitra_id' => rand(1,19),
                'created_at' => now(),
            ]);
        }
    }
}
