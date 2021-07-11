<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

//
    protected $guarded = ['id'];
    protected $appends = ['cover'];


    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
