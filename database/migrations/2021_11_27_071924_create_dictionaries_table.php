<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionaries', function (Blueprint $table) {
            $table->integer('iddictionary', true);
            $table->text('dictionaryname')->nullable();
            $table->string('dictionarytype', 20)->nullable();
            $table->tinyInteger('isdefaultvalue')->default(0)->comment('организации, география, должности, категории, тип экс/мер.., автозавершение, тип экскурсии');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionaries');
    }
}
