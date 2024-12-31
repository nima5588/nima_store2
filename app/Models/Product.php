<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = ['name' , 'price' , 'image' , 'description' , 'category_id' , 'is_slide'];

    public function category()
    {
        return $this->belongsTo(Category::class)->first();
    }

}
