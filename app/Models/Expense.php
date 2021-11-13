<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\C;

class Expense extends Model
{
    use C;
    use HasFactory;
    protected $guarded = [];



    public function branches()
    {
        return $this->belongsTo(Branch::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }



}
