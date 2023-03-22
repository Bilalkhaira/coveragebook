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
        Schema::create('book_sections', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('book_id');
            $table->string('name')->nullable();
            $table->string('layout')->nullable();
            $table->string('hide_show')->default('false');
            $table->string('links')->nullable();
            $table->timestamps();
        });
    }
};
