<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_news', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unaccented_name');
            $table->unsignedBigInteger('id_category'); 
            $table->timestamps();     
            $table->foreign('id_category')->references('id')->on('category')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_news');
    }
};
