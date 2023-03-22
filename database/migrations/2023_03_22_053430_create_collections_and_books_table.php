<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('collections_and_books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('parent_id')->nullable();
            $table->string('archived')->default('false');
            $table->timestamps();
        });
    }
};
