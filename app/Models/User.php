<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\T;

use Spatie\Permission\Traits\HasRoles;
use Spatie\Sluggable\SlugOptions;
use Spatie\Sluggable\HasSlug;

class User extends Authenticatable
{

    use T;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    protected $with = ['type'];
    protected $guarded = [];


    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected $appends = [
        'profile_photo_url',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function scopeCustomer($qry)
    {
        return $qry->whereHas('type', function (Builder $qry) {
            $qry->where('id', '1');
        });

    }

    public function scopeEmployee($qry)
    {
        return $qry->whereHas('type', function (Builder $qry) {
            $qry->where('id', '2');
        });
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
//    public function getFullNameAttribute()
//    {
//        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
//    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['name'])
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(50);
    }
    public function customerOrders()
    {
        return $this->hasMany(Order::class,'customer_id');
    }
}
