<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdineController extends Controller
{
    // Ritorna tutti gli ordini
    public function elenco()
    {
        return Order::all();
    }
}
