<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Supplier;
use App\Models\Recipe;

class Ingredient extends Model
{
    use HasFactory;

    public function supplier()
    {
        return $this->hasOne(Supplier::class);
    }

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
