<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * Retorna el posts de la  categoria
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    /**
     * Retorna usuaris que tinguin posts de la categoria
     */
    public function users()
    {
        return $this->hasManyThrough(User::class, Post::class);
    }
}
