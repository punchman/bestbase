<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('PaymentID');
            $table->bigInteger('CompanyID')->unsigned();
            $table->foreign('CompanyID')->references('CompanyID')->on('companies');            
            $table->timestamp('Date')->nullable();
            $table->integer('Total')->length(10, 2);
            $table->string('Description', 500);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
