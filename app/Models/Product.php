<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define which fields are mass assignable
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id', // Add category_id to mass assignable fields
    ];

    // Define relationship with Category model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
