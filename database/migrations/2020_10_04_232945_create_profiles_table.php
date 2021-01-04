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
            $table->id();
            $table->integer('user_id');
            $table->string('username')->nullable();
            $table->string('ar_username')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('country')->nullable();
            $table->string('ar_country')->nullable();
            $table->string('city')->nullable();
            $table->string('ar_city')->nullable();
            $table->string('about')->nullable();
            $table->string('ar_about')->nullable();
            $table->string('more_info')->nullable();
            $table->string('ar_more_info')->nullable();
            $table->string('picture')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('pinterest')->nullable();
            $table->timestamps();
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
