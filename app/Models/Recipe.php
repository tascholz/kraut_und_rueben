<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingredient;

class Recipe extends Model
{
    use HasFactory;

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }

    protected $fillable = ['recipe_name', 'description', 'rating', 'duration'];
}
