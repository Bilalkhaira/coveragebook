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
        Schema::create('user_plans', function (Blueprint $table) {
            $table->id();
            $table->string('filter')->nullable();
            $table->string('name')->nullable();
            $table->integer('amount')->nullable();
            $table->string('li_exp')->nullable();
            $table->string('exp')->nullable();
            $table->timestamps();
        });
    }
};
