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
        Schema::create('matrics_summaries', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('parent_id')->nullable();
            $table->string('is_custom')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('value')->nullable();
            $table->timestamps();
        });
    }

};
