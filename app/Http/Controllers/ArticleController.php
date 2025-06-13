<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
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
      
        $movie = Auth::user()->movies->create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->file('image')->store('articles', 'public'),
            'movie_id' => $request->movie
        ]);

        dd($movie);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
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
