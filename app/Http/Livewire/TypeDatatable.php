<?php

namespace App\Http\Livewire;

use App\Models\Type;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TypeDatatable extends LivewireDatatable
{
    public $model = Type::class;

    public $hideable = 'inline';
    public $exportable = true;
//    public $afterTableSlot = 'components.selected';

    public function builder()
    {
        return Type::query();
    }

    public function columns()
    {
return [
NumberColumn::name('id')->label(__('#')),

Column::name('name')->label(__('Name'))->searchable(),



Column::callback(['id', 'name'], function ($id,$name) {
    return view('components.table-actions',['url' => url("types/$id"), 'model' => 'Types','id' => $id, 'name' => $name]);
//                return view('components\table-actions', ['id' => $id, 'name' => $name]);
})
];
}
}
