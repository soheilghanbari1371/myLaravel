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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nationalcard')->nullable();
            $table->string('feeimage')->nullable();
            $table->string('nationalid')->nullable();
            $table->string('birthday')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postaladdress')->nullable();
            $table->integer('postalcode')->nullable();
            $table->integer('cellphone')->nullable();
            $table->integer('homephone')->nullable();


            $table->string('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('balance')->default(0);
            $table->integer('blockedmoney')->default(0);
            //false = user , true = admin
            $table->boolean('role')->default(false);
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
        Schema::dropIfExists('users');
    }

}
