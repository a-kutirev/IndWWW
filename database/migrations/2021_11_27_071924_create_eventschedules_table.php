<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventschedules', function (Blueprint $table) {
            $table->integer('idevent', true);
            $table->integer('idexpoeventname')->nullable();
            $table->integer('idpositions')->nullable();
            $table->string('ideventtype', 100)->nullable()->comment('мероприятие, экскурсия, выездная....');
            $table->integer('idtourtype')->nullable()->comment('пешеходная, тематическая, временная .... МК, Л...');
            $table->tinyInteger('tourduration')->nullable();
            $table->date('begindate')->nullable();
            $table->date('enddate')->nullable();
            $table->tinyInteger('ispersistent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventschedules');
    }
}
