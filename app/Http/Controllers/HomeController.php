<?php

namespace App\Http\Controllers;
use App\Models\recipes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'recipes' => Auth::user()
                ->recipes()
                ->latest()
                ->get(),
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function recipestore(Request $request)
    {
        $name = $request->file('photo')->hashName();
        $path = $request->file('photo')->store('public/img');
        Auth::user()
            ->recipes()
            ->create(['title' => $request->title, 'description' => $request->description, 'ingredients' => $request->ingredients, 'photo' => $name]);
        return redirect()->route('home');
    }

    public function edit(recipes $recipes)
    {
        return view('edit', ['recipes' => $recipes]);
    }

    public function update(Request $request, recipes $recipes)
    {
        $recipes->fill(['title' => $request->title, 'description' => $request->description, 'ingredients' => $request->ingredients, 'photo' => $request->photo]);
        $recipes->save();
        return redirect()->route('home');
    }

    public function destroy(recipes $recipes)
    {
        $recipes->delete();
        return redirect()->route('home');
    }
}
