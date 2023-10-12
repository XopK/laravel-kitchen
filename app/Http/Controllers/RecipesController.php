<?php

namespace App\Http\Controllers;

use App\Models\recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index(){
        $resipes = recipes::latest()->get();
        return view("index", ['recipes' => $resipes]);
    }

    public function detail($recipes){
        $recipes = recipes::find($recipes);
        return view('recipes', ['recipes' => $recipes]);
    }
}
