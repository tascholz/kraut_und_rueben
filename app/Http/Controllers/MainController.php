<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showRecipes()
    {
        
    }
}
