<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'quantity',
        'product_id',
        'product_title',
        'product_price',
        'product_description',
        'status',
        'reference'
    ];
}
