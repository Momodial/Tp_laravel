<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Calcul de la note moyenne
    public function averageRating()
    {
        return $this->reviews()->avg('rating');
    }

}
