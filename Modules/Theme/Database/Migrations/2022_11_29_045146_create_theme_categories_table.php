<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_categories', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default(1);
            $table->string('thumbnail');
            $table->string('seo_title');
            $table->string('seo_description');
            $table->string('seo_keyword');
            $table->string('seo_canonical');
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
        Schema::dropIfExists('theme_categories');
    }
};
