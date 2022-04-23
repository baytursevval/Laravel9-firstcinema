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
        Schema::create('films', function (Blueprint $table) {
            //$table->id()->autoIncrement();
            $table->id();
            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('image_slider')->nullable();
            $table->string('category_id')->nullable();
            $table->text('detail')->nullable();
            $table->string('videolink')->nullable();
            $table->string('userid')->nullable();
            $table->string('status')->default('False');
            $table->integer('point')->default(0);

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
        Schema::dropIfExists('films');
    }
};
