<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Models\Role as BaseRole;


/**
 * @mixin IdeHelperRole
 */
class Role extends BaseRole
{
//    use Base, Categorizable, Taggable, Notable, InteractsWithMedia;
    protected $guarded = ['id'];
    protected $appends = ['cover'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}





