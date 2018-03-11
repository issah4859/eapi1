<?php

namespace App\model;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

    public function product()

    {

        return $this->belongsTo(\App\Model\Product::class);

    }

}
