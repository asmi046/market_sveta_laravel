<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_sku',
        'img_sku',
        'img_name',
        'alt',
        'title',
        'order'
    ];
}
