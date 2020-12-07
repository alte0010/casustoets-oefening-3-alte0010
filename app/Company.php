<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function movie()
    {
        return $this->belongsToMany(Movies::class);;
    }
    protected $fillable = ['name', 'country', 'history'];
}
