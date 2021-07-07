<?php

namespace App\Models;
use App\Traits\Base;
use App\Traits\Ctmn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
//   use Base, Ctmn;

    protected $guarded = ['id'];
    protected $appends = ['cover'];

//    protected $with = ['media', 'category', 'tags'];

}
