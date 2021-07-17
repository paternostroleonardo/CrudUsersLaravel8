<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * nueva migracion con datos extra de la tabla users y las llaves foraneas hacia las tablas cities y departments
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('identification')->nullable();
            $table->integer('phone')->nullable();
            $table->date('birth_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
