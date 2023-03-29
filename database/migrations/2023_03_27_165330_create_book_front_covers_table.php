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
            $table->tinyInteger('book_id')->nullable();
            $table->tinyInteger('layout_id')->nullable();
            $table->string('cover_logo')->nullable();
            $table->string('cover_title')->nullable();
            $table->string('cover_subtitle')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('cover_bg_color')->nullable();
            $table->enum('status', ['show', 'hide'])->default('show');
            $table->tinyInteger('created_by')->nullable();
            $table->tinyInteger('updated_by')->nullable();
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
        Schema::dropIfExists('book_front_covers');
    }
};
