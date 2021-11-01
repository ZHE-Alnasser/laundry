<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\C;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;


class Order extends Model
{

    use HasFactory, SoftDeletes;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('deleted_at', function (Builder $builder) {
            $builder->withTrashed();
        });
    }

    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Service::class)->withPivot('quantity', 'price', 'total');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

  public function categories()
    {
        return $this->belongsTo(Category::class);
    }


    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id')
            ->whereHas('category',function (Builder $qry) {
                $qry->where('id', '1');
            });

    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id')->whereHas('category', function (Builder $qry) {
            $qry->where('id', '2');
        });
//
    }





}
