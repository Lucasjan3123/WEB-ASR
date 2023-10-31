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
        Schema::create('_blog', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
 
            $table->foreign('users_id')->references('id')->on('users') ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nama');
            $table->string('title');
            $table->unsignedBigInteger('_kategori_id');
 
            $table->foreign('_kategori_id')->references('id')->on('_kategori') ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('gambar');
            $table->string('content');
            $table->string('tag1');
            $table->string('tag2');
            $table->string('tag3');
            $table->timestamps();
            // $table->date('month_year');
            // $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_blog');
    }
};
