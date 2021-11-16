<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Traits\C;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CategoryDatatable extends LivewireDatatable
{
    use C;
    public $model = Category::class;

    public $hideable = 'inline';
    public $exportable = true;
    public $type;

//    public $afterTableSlot = 'components.selected';

//    public function boot($type)
//    {
//        $this->type = $type;
//
//}



    public function builder()
    {
$this->type = last(request()->segments());

//        return Category::query();
        return Category::query()->whereType($this->type);
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

public Category $newCategory;

    public function submit()
    {

}
}
