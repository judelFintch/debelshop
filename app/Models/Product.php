<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'image',
        'description',
        'category_id',
        'inStock'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
