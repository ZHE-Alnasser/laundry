<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function Services()
    {
        return $this->belongsToMany(Service::class)->withPivot('order_id','service_id','item_id','quantity','amount');
    }

    public function time_frame()
    {
        return $this->belongsTo(TimeFrame::class);
    }
}
