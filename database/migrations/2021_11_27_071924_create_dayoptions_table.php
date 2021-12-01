<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dayoptions', function (Blueprint $table) {
            $table->integer('iddayoption', true);
            $table->date('dayoptiondate')->nullable();
            $table->integer('dayoptionflag')->nullable()->comment('1 - рабочий день, 2 - без контроля, 4 - есть обзорка, 8 - доп экскурсвод, 16 - начальное время изменено, биты 5-9 - нач. время');
            $table->string('dayoptionaddguids', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dayoptions');
    }
}
