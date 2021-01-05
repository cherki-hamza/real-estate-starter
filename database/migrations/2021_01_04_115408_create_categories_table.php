<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('en_title')->nullable();
            $table->string('en_slug')->nullable();
            $table->string('fr_title')->nullable();
            $table->string('fr_slug')->nullable();
            $table->string('es_title')->nullable();
            $table->string('es_slug')->nullable();
            $table->string('ar_title')->nullable();
            $table->string('ar_slug')->nullable();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
