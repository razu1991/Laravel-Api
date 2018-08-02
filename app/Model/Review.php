<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
      'customer','review','star'  
    ];
    public function products(){
        return $this->belongsTo(Product::class);
    }
}
