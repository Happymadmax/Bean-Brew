<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Session;

class BasketController extends Controller
{
    // View the basket
    public function view()
    {
        $basket = Session::get('basket', []);  // Default to an empty basket if not set
        return view('basket.view', compact('basket'));
    }
    // Clear the basket
    public function clear()
    {
        // Remove the basket from the session
        Session::forget('basket');
        return redirect()->route('basket.view');
    }
}