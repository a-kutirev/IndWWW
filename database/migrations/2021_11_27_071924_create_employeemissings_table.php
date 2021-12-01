<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeemissingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeemissings', function (Blueprint $table) {
            $table->integer('idemployeemissing', true);
            $table->integer('idemployeename')->nullable();
            $table->integer('employeemissingflag')->nullable();
            $table->dateTime('employeemissingbegin')->nullable();
            $table->dateTime('employeemissingend')->nullable();
            $table->text('employeemissingcomment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeemissings');
    }
}
