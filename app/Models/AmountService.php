<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class AmountService extends Model
{
    use HasFactory;
    protected $table = 'amount_service';
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
