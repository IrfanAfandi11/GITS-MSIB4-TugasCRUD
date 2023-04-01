<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'description',
        'category_id',
        'price'
    ];

    public function category()
{
    return $this->belongsTo(category::class);
}

}
