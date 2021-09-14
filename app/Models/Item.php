<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Item extends Model implements HasMedia
{
use HasFactory;
use InteractsWithMedia;
//
//    protected static $logFillable = true;
    protected $guarded = ['id'];
//    protected $appends = ['cover'];


    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('order_id','service_id','item_id','quantity','amount');
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('items')
            ->singleFile();


    }
//    public function services()
//    {
//        return $this->hasMany(Service::class);
//    }
}
