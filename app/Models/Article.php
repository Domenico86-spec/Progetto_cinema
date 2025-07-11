<?php

namespace App\Models;

use App\Models\Movie;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    use HasFactory, Searchable;

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
        ];
    }
}
