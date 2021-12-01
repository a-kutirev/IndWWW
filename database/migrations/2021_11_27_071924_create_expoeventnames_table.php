<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpoeventnamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expoeventnames', function (Blueprint $table) {
            $table->integer('idexpoeventname', true);
            $table->string('expoeventname', 500)->nullable();
            $table->string('expoeventtype', 100)->nullable();
            $table->tinyInteger('isdefault')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expoeventnames');
    }
}
