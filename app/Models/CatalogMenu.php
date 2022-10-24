<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogMenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'order', 
        'title', 
        'link', 
    ];

    public function sub_puncts() {
        return $this->hasMany(SubCatalogMenu::class, "parent", "title");
    }
}
