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
            $table->string('nameDrink', 200);
            $table->string('category', 100);
            $table->string('alcoholic', 100);
            $table->string('drinkThumb', 500)->nullable();
            $table->string('ingredient1', 200);
            $table->string('ingredient2', 250);
            $table->string('ingredient3', 300)->nullable();
            $table->string('ingredient4', 300)->nullable();
            $table->string('ingredient5', 300)->nullable();
            $table->string('ingredient6', 300)->nullable();
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
