<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

//   use Base, Ctmn;

    protected $guarded = ['id'];
    protected $appends = ['cover'];

//    protected $with = ['media', 'category', 'tags'];


}
