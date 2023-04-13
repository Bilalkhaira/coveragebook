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
            $table->integer('book_id')->nullable();
            $table->integer('layout_id')->nullable();
            $table->string('cover_logo')->nullable();
            $table->string('cover_title')->nullable();
            $table->string('cover_subtitle')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('cover_image_title')->nullable();
            $table->string('cover_bg_color')->nullable();
            $table->enum('visibility', ['show', 'hide'])->default('show');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
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
