<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', ['items' => $items]);
    }

    public function show(Item $item)
    {
        return view('items.show', ['item' => $item]);
    }

    public function storebasket()
    {
        $attributes = request()->validate([
            'id' => ['required'],
            'name' => ['required'],
            'price'      => ['required', 'email'],
            'size'   => ['required', Password::min(6), 'confirmed'],
            'quantity' => ['required'],
    ]);
    }
}