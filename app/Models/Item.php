<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
use HasFactory;
//
    protected static $logFillable = true;
    protected $guarded = ['id'];
    protected $appends = ['cover'];


//    public function orders()
//    {
//        return $this->belongsToMany(Order::class);
//    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
