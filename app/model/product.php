<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //

    public function Reviews()

    {

        return $this->hasMany(\App\model\Review::class);

    }


}


