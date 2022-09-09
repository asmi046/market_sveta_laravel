<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug', 
        'price', 
        'price_old', 
        'manufacture_status',
        'insklad',
        'sku', 
        'brand', 
        'state', 
        'collection', 
        'style', 
        'form', 
        'arm_color', 
        'plaf_color', 
        'arm_material', 
        'plaf_material',
        'mesto',
        'quote', 
        'description',
        'cat1',
        'cat2',
        'cat3',
        'cat4',
        'img',
        'title_seo',
        'description_seo'
    ];

    public function scopeFilter(Builder $builder, QueryFilter $filter) {
        return $filter->apply($builder);
    }

    public function product_images() {
        return $this->hasMany(Image::Class, 'sku', 'product_sku');
    } 

    public function product_propertys() {
        return $this->hasMany(Property::Class, 'sku', 'product_sku');
    } 
}
