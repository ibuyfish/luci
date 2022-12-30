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
        Schema::create('theme_category_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('theme_category_id')->index('theme_category_id');
            $table->string('language')->nullable();
            $table->string('name')->nullable();
            $table->string('subname')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('theme_category_translations');
    }
};
