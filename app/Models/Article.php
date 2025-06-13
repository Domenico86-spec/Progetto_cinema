<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{

    protected $table = 'articles';
    
    
    protected $fillable = [
        'title',
        'description',
        'image',
        'movie_id'
        
    ];

    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }
}
