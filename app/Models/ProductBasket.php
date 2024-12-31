<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBasket extends Model
{
    protected $fillable = ['product_id' , 'count' , 'user_id' , 'is_paying'];

    public function Product()
    {
        return $this->belongsTo(Product::class)->first();
    }
}
