<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

protected static $logFillable = true;
    protected $guarded = [];

    protected static $logAttributes = [
        'items.name',
        'name',
        'price',
    ];
//    protected $fillable = [
//        'name','item_id','price'
//    ];
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
