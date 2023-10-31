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
        Schema::create('_komentar_news', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->date('date');
            $table->unsignedBigInteger('news_id');
            
            $table->foreign('news_id')->references('id')->on('news');
            $table->string('comment');
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
        Schema::dropIfExists('_komentar_news');
    }
};
