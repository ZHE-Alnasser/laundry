<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\T;
class Order extends Model
{
    use T;
    use HasFactory;

    protected $guarded = [];

// protected $with = ['type'];
    public function Services()
    {
        return $this->belongsToMany(Service::class)->withPivot('order_id','service_id','item_id','quantity','amount');
    }

    public function time_frame()
    {
        return $this->belongsTo(TimeFrame::class);
    }

//    public function customer()
//    {
//        return $this->belongsTo(User::class, 'customer_id')
//            ->whereHas('type',function (Builder $qry) {
//                $qry->where('name', 'Customer');
//            });
//
//    }

//    public function employee()
//    {
//        return $this->belongsTo(User::class, 'employee_id')->whereHas('type', function (Builder $qry) {
//            $qry->where('name', 'Employee');
//        });
////            ->where('type', 'Employee');
//    }
}
