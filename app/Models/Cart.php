<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Session;

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

    public static function add($product_id) {
        $product = Product::where('sku', $product_id)->firstOrFail();

        if ($cart = self::where(["session_id" => session()->getId(), "product_sku" => $product_id])->first()) {
            $cart->quentity++;
            $cart->save();
        } else {
            $cart = self::create([
                "session_id" => session()->getId(),
                "user_id" => 0,
                "product_sku" => $product_id,
                "quentity" => 1,
                "price" => $product->price
            ]);
        }
    }

    public static function delete_tovar($product_id) {
        $element = self::where(["session_id" => session()->getId(), "product_sku" => $product_id])->first();
        $element->delete();
    }

}
