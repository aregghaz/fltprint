<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('email');
            $table->string('name');
            $table->string('portable');
            $table->string('password');
            $table->string('company')->nullable();
            $table->string('companyName')->nullable();
            $table->string('telephone')->nullable();
            $table->string('address')->nullable();
            $table->string('addressElse')->nullable();
            $table->integer('postalCode')->nullable();
            $table->string('city')->nullable();
            $table->string('companyRe')->nullable();
            $table->string('nameRe')->nullable();
            $table->string('telephoneRe')->nullable();
            $table->string('nds')->nullable();
            $table->string('addressRe')->nullable();
            $table->string('addressElseRe')->nullable();
            $table->string('postalRe')->nullable();
            $table->string('cityRe')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
