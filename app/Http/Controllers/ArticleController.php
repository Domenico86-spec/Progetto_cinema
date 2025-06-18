<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $movies = Movie::all();
        return view('article.create', compact('movies')); 
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'movie' => 'required|image',
        ]);
      
        $movie = Auth::user()->movies->create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->file('image')->store('articles', 'public'),
            'movie_id' => $request->movie
        ]);

        // dd($movie);

        return redirect(route('homepage'));
       
    }

        public static function middleware()
    {
        return [

            new Middleware ('auth', except: ['index']),
        ];
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    
}
