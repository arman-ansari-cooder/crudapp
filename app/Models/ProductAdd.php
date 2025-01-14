<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAdd extends Model
{
    use HasFactory;

    protected $table = 'product_add';
    protected $fillable = ['product', 'category_id'];
}
