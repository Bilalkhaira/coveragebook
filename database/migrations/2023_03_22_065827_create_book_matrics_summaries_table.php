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
        Schema::create('book_matrics_summaries', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('book_id')->nullable();
            $table->tinyInteger('matrics_summaries_id')->nullable();
            $table->timestamps();
        });
    }
};
