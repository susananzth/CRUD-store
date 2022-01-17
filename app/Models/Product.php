<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'color_id',
    ];

    public function colors()
    {
        return $this->hasMany(color::class);
    }

    public function prices()
    {
        return $this->belongsToMany(Price::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
}
