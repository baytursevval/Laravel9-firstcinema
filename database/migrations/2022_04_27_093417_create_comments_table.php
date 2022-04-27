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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment',255)->nullable();
            $table->integer('rate')->nullable();
            $table->string('film_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('ip',50)->nullable();
            $table->string('status',20)->default('True');
            $table->string('saund')->nullable();
            $table->string('display')->nullable();
            $table->string('role',20)->nullable();
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
        Schema::dropIfExists('comments');
    }
};
