<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Database mein yeh field fillable hai
    protected $fillable = ['name'];

    // Relationship: Ek category ke multiple products ho sakte hain
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
