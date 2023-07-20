<?php

namespace App\Http\Controllers\Api;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CocktailController extends Controller
{
    public function index(Request $request)
    {
        $searchCategory = $request->query('category', '');

        $cocktails = Cocktail::where('category', 'LIKE', "%{$searchCategory}%")->paginate(6);

        return response()->json($cocktails);

    }
}
