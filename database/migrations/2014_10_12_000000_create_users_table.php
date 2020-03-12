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
            $table->string('nationalcard');
            $table->string('feeimage');
            $table->string('nationalid');
            $table->string('birthday');
            $table->string('city');
            $table->string('state');
            $table->string('postaladdress');
            $table->integer('postalcode');
            $table->integer('cellphone');
            $table->integer('homephone');


            $table->string('birthday');
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
