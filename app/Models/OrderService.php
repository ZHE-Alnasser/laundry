<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderService extends pivot
{
//    use HasFactory;
    protected $guarded = [];

    protected $table = 'order_service';
    use HasFactory, LogsActivity;

//    protected static $logFillable = true;
//    protected $fillable = [
//        'order_id',
//        'service_id',
//        'item_id',
//        'amount',
//        'quantity'
//    ];

//    public function amount()
//    {
//        return $this->hasOne(CostMajor::class, 'major_university_id', 'id');
//    }
//
//    public function quantity()
//    {
//        return $this->hasOne(AdditionalInfoMajor::class, 'major_university_id', 'id');
//    }
}
