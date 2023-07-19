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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('strDrink', 200);
            $table->string('strCategory', 100);
            $table->string('strAlcoholic', 100);
            $table->string('strDrinkThumb', 500)->nullable();
            $table->string('strIngredient1', 200);
            $table->string('strIngredient2', 250);
            $table->string('strIngredient3', 300)->nullable();
            $table->string('strIngredient4', 300)->nullable();
            $table->string('strIngredient5', 300)->nullable();
            $table->string('strIngredient6', 300)->nullable();
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
        Schema::dropIfExists('cocktails');
    }
};
