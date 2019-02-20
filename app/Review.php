<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
