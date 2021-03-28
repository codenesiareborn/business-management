<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('mitra_id')->constrained('mitras')->onDelete('cascade');
            $table->string('no')->nullable();
            $table->string('date_invoice')->nullable();
            $table->string('sales_person')->nullable();
            $table->string('terms')->nullable();
            $table->string('currency')->nullable();
            $table->string('due_date')->nullable();
            $table->string('disccount')->nullable();
            $table->string('tax')->nullable();
            $table->string('total')->nullable();
            $table->string('date')->nullable();
            $table->string('information')->nullable();
            $table->string('terms_condition')->nullable();
            $table->string('termin_invoice')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
