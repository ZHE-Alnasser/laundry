<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Activitylog\Traits\LogsActivity;
class Service extends Model
{
    use HasFactory,HasSlug;

protected static $logFillable = true;
    protected $guarded = [];

    protected static $logAttributes = [
//        'items.name',
        'name',
        'price',
    ];
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('order_id','service_id','quantity','amount');

//        (Order::class,'order_service','order_id','service_id','item_id','quantity','amount');
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
