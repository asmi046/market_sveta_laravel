<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        "mesto",
        "slug",
        'title',
        'title_seo',
        'description_seo'
    ];

    public function place_product() {
        return $this->hasMany(Product::class, 'mesto', 'mesto');
    }
}
