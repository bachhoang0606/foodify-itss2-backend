<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->integer('deleted_flag');
            $table->string('name');
            $table->text('description');
            $table->integer('views');
            $table->integer('total_like');
            $table->foreignId('category_region_id')->constrained('food_categories');
            $table->foreignId('category_id')->constrained('food_categories');
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
        Schema::dropIfExists('food');
    }
}
