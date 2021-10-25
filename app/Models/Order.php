<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
    
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }
}
