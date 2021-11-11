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

    use HasFactory, SoftDeletes,LogsActivity;


     protected static $logFillable = true;
    protected $guarded = [];

    protected static $logAttributes = [
        'id',
        'customer.name',
        'employee.name',
        'is_delivery',
        'is_pickup',
        'delivery_time_frame_id',
        'pickup_time_frame_id',
        'requested_pickup_date',
        'requested_delivery_date',
        'agent_picked_up_date',
        'agent_delivered_date',
        'payment',
        'total',
        'sub_total',
        'vat',
        'branch.name',

    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('deleted_at', function (Builder $builder) {
            $builder->withTrashed();
        });
    }

  //  protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Service::class)->withPivot('quantity', 'price', 'total');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
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
