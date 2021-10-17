<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    protected $guarded = [];
    protected $appends = ['item_name'];

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('qty', 'price', 'amount');
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function getItemNameAttribute()
    {
        return $this->item->name;
    }
}
