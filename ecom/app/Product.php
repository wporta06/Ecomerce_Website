<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["title","slug","description","price","old_price","image","inStock","category_id"]; //to avoide error must essingment (you have not the permission to modifie chamx if you did not add it here in fillable) 

    public function getRouteKeyName()   // getRouteKeyName() how to find product, to change recherge from id to slug 
    {
        return "slug";
    }
    public function category(){         //relation with who?, that product belongs to category or has relation with category
        return $this->belongsTo(Category::class);
    }
}
