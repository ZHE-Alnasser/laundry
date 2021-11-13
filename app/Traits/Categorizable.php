<?php
namespace App\Traits;
use App\Models\Category;
trait Categorizable
{
    public function category()
    {
        return $this->belongsTo(Category::class)->whereType($this->getTable());
    }

    public function syncCategory($name)
    {
        $cleanName = str_replace(['[{"value":"', '"}]'], '', $name);
        $this->attributes['category_id'] = Category::firstOrCreate([ 'type' => $this->getTable(), 'name' => $cleanName])->id;
        $this->save();
        cache()->forget($this->getTable() . 'categories');
    }
}
