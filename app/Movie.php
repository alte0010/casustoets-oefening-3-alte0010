<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function movie()
    {
        return $this->belongsToOne(Company::class);;
    }

    protected $fillable = ['title', 'year', 'excerpt', 'last_watched_at', 'times_watched', 'average_rating'];
}
