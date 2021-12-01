<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->integer('idtour', true);
            $table->integer('idevent')->nullable();
            $table->date('tourdate')->nullable();
            $table->time('tourtime')->nullable();
            $table->string('idguids', 150)->nullable();
            $table->string('tourgroupage', 100)->nullable();
            $table->string('tourgroupamount', 50)->nullable();
            $table->integer('touraddition')->nullable();
            $table->integer('tourflag')->nullable()->comment('биты: 0 - отменена, 1 - подтверждена, 2 - проведена, 3 - Не менять экскурсовода, 4 - по записи, 5-13 - статистика, ');
            $table->integer('idcategory')->nullable();
            $table->text('tourcomment')->nullable();
            $table->text('tourdeletereason')->nullable();
            $table->string('linkpair', 50)->nullable()->comment('Для: экскурсия + мероприятие. (idtour)');
            $table->integer('tournumgroup')->nullable();
            $table->text('viscontacts')->nullable();
            $table->integer('idorg')->nullable();
            $table->integer('idgeo')->nullable();
            $table->string('idcontacts_str', 150)->nullable();
            $table->tinyInteger('outdoor')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
