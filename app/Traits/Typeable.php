<?php
namespace App\Traits;
use App\Models\Type;
trait Typeable
{
    public function type()
    {
        return $this->belongsTo(Type::class)->whereType($this->getTable());
    }

    public function syncType($name)
    {
        $cleanName = str_replace(['[{"value":"', '"}]'], '', $name);
        $this->attributes['type_id'] = Type::firstOrCreate([ 'name' => $this->getTable()])->id;
        $this->save();
        cache()->forget($this->getTable() . 'types');
    }
}
