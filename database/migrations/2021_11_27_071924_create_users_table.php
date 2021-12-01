<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('idusers', true);
            $table->string('usersname', 100)->nullable();
            $table->string('userspass', 45)->nullable();
            $table->string('usersrole', 45)->nullable();
            $table->string('userscomment', 100)->nullable();
            $table->tinyInteger('userInactive')->default(0);
            $table->string('login', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
