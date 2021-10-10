<?php
namespace App\Traits;
use App\Models\Category;
use App\Models\Type;
trait Categorizable
{
    public function category()
    {
        return $this->belongsTo(Category::class)->whereType($this->getTable());
    }

    public function syncCategory($name)
    {
        $cleanName = str_replace(['[{"value":"', '"}]'], '', $name);
        $this->attributes['type_id'] = Type::firstOrCreate([ 'name' => $this->getTable()])->id;
        $this->save();
        cache()->forget($this->getTable() . 'categories');
    }
}
