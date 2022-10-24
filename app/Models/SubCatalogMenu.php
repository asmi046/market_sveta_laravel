<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCatalogMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent', 
        'sub_punct', 
        'order', 
        'title', 
        'link', 
    ];
}
