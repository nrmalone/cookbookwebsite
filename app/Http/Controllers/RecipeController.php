<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // website homepage
    public function index() {
        return view('recipe.index', [
            'recipes' => Recipe::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }
}
