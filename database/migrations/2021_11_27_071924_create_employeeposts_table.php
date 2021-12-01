<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeepostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeposts', function (Blueprint $table) {
            $table->integer('idemplyeepost', true);
            $table->integer('idemployee')->nullable();
            $table->integer('idpost')->nullable();
            $table->date('operationdate')->nullable();
            $table->integer('idoperation')->nullable();
            $table->tinyInteger('additionalguid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeeposts');
    }
}
