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
            $table->integer('collection_id')->nullable()->comment('foreign key from collection table');
            $table->string('name');
            $table->string('banner_logo')->nullable();
            $table->string('accent_color')->nullable();
            $table->integer('front_cover_id')->nullable()->comment('foreign key from covers table');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->enum('show_matrics_summary', [0,1])->default(1);
            $table->enum('show_front_cover', [0,1])->default(1);
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
        Schema::dropIfExists('books');
    }
};
