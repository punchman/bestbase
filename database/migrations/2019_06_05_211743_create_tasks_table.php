<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('TaskID');
            $table->bigInteger('ProjectID')->unsigned();
            $table->foreign('ProjectID')->references('ProjectID')->on('projects');            
            $table->bigInteger('UserID')->unsigned();
            $table->foreign('UserID')->references('UserID')->on('Users');            
            $table->string('Description', 500);
            $table->integer('Hours');
            $table->integer('Rate');
            $table->string('Comment', 500);
            $table->timestamp('Date')->nullable();
            $table->string('Status');
            $table->boolean('Approved');
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
        Schema::dropIfExists('tasks');
    }
}
