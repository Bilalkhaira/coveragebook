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
        Schema::create('book_overviews', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('book_id');
            $table->string('banner_logo')->nullable();
            $table->string('accent_color')->nullable();
            $table->string('backLinks')->nullable();
            $table->string('backLinks_views_hide')->default('false');
            $table->string('backLinks_audience_hide')->default('false');
            $table->string('fontCoverSec_hide')->default('false');
            $table->string('matricsSummarySec_hide')->default('false');
            $table->string('highlightsSec_hide')->default('false');
            $table->timestamps();
        });
    }
};
