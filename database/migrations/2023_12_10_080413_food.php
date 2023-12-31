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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->timestamps();
            $table->integer('deleted_flag');
            $table->string('name');
            $table->string('name_no_accent');
            $table->text('description');
            $table->integer('views');
            $table->integer('total_like');
            $table->foreignId('food_category_regions_id')->constrained();
            $table->foreignId('food_categories_id')->constrained();
            $table->string('thumbnail');
            $table->string('video');
            $table->integer('prep_time');
            $table->integer('cooking_time');
            $table->integer('servings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
};
