<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'user_id',
        'product_sku',
        'quentity',
        'price'
    ];

    public function tovar_data() {
        return $this->hasOne(Product::class, 'sku', 'product_sku');
    }

    public function add($product_id) {
        $product = Product::where('sku', $product_id)->findOrFail();
    }

}
