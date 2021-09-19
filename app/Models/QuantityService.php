<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class QuantityService extends Model
{
    use HasFactory,LogsActivity;
    protected $table = 'quantity_service';
//    protected $guarded = [];
    protected static $logFillable = true;
    protected $fillable = [
        'order_service_id',
        'value',
    ];

    public function orderService()
    {
        return $this->belongsTo(OrderService::class);
    }
}
