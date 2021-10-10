<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CategoryDatatable extends LivewireDatatable
{
    public $model = Category::class;

    public $hideable = 'inline';
    public $exportable = true;
//    public $afterTableSlot = 'components.selected';

    public function builder()
    {
        return Category::query();
    }

    public function columns()
    {
return [
NumberColumn::name('id')->label(__('#')),

Column::name('name')->label(__('Name'))->searchable(),



Column::callback(['id', 'name'], function ($id,$name) {
    return view('components.table-actions',['url' => url("categories/$id"), 'model' => 'Categories','id' => $id, 'name' => $name]);
//                return view('components\table-actions', ['id' => $id, 'name' => $name]);
})
];
}
}
