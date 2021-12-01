<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeesname', function (Blueprint $table) {
            $table->integer('idemployeename', true);
            $table->string('employeenamefullname', 500);
            $table->string('employeenameshortname', 45);
            $table->tinyInteger('employeesnamedefault')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeesname');
    }
}
