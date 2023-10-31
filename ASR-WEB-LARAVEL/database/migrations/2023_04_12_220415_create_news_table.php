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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
 
            $table->foreign('users_id')->references('id')->on('users') ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('Author');
            $table->date('Date');
            $table->string('Title');
            $table->string('gambar');
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('gambar4');
            $table->string('gambar5');
            $table->string('gambar6');
            $table->string('gambar7');

            $table->string('Content');
            $table->string('tag1');
            $table->string('tag2');
            $table->string('tag3');

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
        Schema::dropIfExists('news');
    }
};
