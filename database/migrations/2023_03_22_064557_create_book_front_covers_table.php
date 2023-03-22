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
        Schema::create('book_front_covers', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('book_id');
            $table->string('layout')->nullable();
            $table->string('logo')->nullable();
            $table->string('title')->nullable();
            $table->string('subTitle')->nullable();
            $table->string('coverImg')->nullable();
            $table->string('coverImg_text')->nullable();
            $table->string('bg_color')->nullable();
            $table->string('frontCover_hide')->default('false');
            $table->timestamps();
        });
    }
};
