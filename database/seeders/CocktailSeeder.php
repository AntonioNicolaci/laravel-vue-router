<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cocktailAPI = new Cocktail();
        $cocktailQuery = $cocktailAPI->get();
        $cocktails = $cocktailQuery->getBody();
        $cocktails = json_decode($cocktails, true);
        foreach ($cocktails as $cocktail) {
            return [
                'nameDrink' => $cocktail['strDrink'],
            ];
        }
    }
}
