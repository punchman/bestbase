<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('ProjectID');
            $table->string('ProjectName', 100);
            $table->bigInteger('CompanyID')->unsigned();
            $table->foreign('CompanyID')->references('CompanyID')->on('companies');
            $table->timestamp('DateFrom')->nullable();
            $table->timestamp('DateTo')->nullable();
            $table->string('Description', 500);
            $table->integer('Total')->length(10, 2);            
            $table->string('Status');
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
        Schema::dropIfExists('projects');
    }
}
