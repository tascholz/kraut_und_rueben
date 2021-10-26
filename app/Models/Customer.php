<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name', 
        'first_name', 
        'birthdate',
        'street',
        'house_number',
        'postcode',
        'city',
        'telephone',
        'email'
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
