<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ItemController;

class Item extends Model
{
    use HasFactory;

    // Optionally define the table name if it's different from the pluralized model name.
    protected $table = 'items'; 

    // If you plan to use this for database operations, define the fillable attributes.
    protected $fillable = ['name', 'price'];

    // If you want to define relationships or methods later, you can do that as well.
}
