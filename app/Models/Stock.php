<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 
        'title', 
        'link', 
        'img', 
        'end_data', 
        'description', 
        'title_seo', 
        'description_seo' 
    ];

}
