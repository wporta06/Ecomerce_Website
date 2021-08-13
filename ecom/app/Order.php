<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ["user_id","product_name","qty","price","total","delivered","fullname","address","phonenumber","note"]; //to avoide error must essingment (you have not the permission to modifie chamx if you did not add it here in fillable) 




    public function user(){         //relation with who?, that order belongs to user or has relation with order
        return $this->belongsTo(User::class);
    }

}


