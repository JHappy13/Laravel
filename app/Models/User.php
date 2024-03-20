<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Obtenir els posts que te l'usuari
     */
    public function posts(): HasMany{
        return $this->hasMany(Post::class);
    }

    /**
     * Retorna l'ultim Post de l'usuari
     */
    public function lastestPost() : HasOne
    {
        return $this->hasOne(Post::class)->latestOfMany();
    }

    /**
     * Retorna el Post més antic de l'usuari
     */
    public function oldestPost() : HasOne
    {
        return $this->hasOne(Post::class)->oldestOfMany();
    }

    public function categories(){
            return $this->hasManyThrough(Post::class, Category::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
}
