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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('collection_id')->comment('foreign key from collection table');
            $table->string('name');
            $table->string('banner_logo')->nullable();
            $table->string('accent_color')->nullable();
            $table->string('front_cover_id')->nullable()->comment('foreign key from covers table');
            $table->tinyInteger('created_by')->nullable();
            $table->tinyInteger('updated_by')->nullable();
            $table->tinyInteger('show_matrics_summary')->default(1);
            $table->tinyInteger('show_front_cover')->default(1);
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
        Schema::dropIfExists('books');
    }
};
