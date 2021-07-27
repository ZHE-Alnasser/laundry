<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Service extends Model
{
    use HasFactory,HasSlug;

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
