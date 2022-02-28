<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('username')->unique();
            $table->string('referral_id');
            $table->string('unique_id')->unique();
            $table->bigInteger('wallet')->default(0);
            $table->bigInteger('bonus')->default(0);
            $table->integer('pv')->default(0);
            $table->integer('dir_month_count')->default(0);
            $table->integer('sl')->default(0);
            $table->integer('dcount')->default(0);
            $table->boolean('isActive')->default(0);
            $table->boolean('status')->default(0);
            $table->string('desig')->default('starter');
            $table->bigInteger('nin')->unique();
            $table->timestamps();



            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
