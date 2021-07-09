<?php
// 1
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["title","slug"]; //to avoide errors  

    public function getRouteKeyName()   // getRouteKeyName() how to find product, to change recherge from id to slug 
    {
        return "slug";
    }
    public function products(){         //relation that category has many products
        return $this->hasMany(Product::class);
    }
}


