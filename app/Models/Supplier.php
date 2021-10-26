<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingredient;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',
        'street',
        'house_number',
        'postcode',
        'city',
        'telephone',
        'email'
    ];

    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }
}
