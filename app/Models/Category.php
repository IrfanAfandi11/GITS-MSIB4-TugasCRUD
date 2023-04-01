<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'category_id',
    ];

public function products()
{
    return $this->hasMany(product::class ,'category_id','id');
}
       
    
    
}
