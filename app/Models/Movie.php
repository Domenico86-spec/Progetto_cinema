<?php

namespace App\Models;


use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{

    protected $table = 'movies';

    protected $fillable = [
        'name',
        'image',
        'genre',
        'cast',
        'year',

        
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
