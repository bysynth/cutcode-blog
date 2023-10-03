<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'author_id');
    }
}
