<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_request_id',
        'stock',
        'unit',
        'item_description',
        'quantity',
        'unit_cost',
    ];
}
