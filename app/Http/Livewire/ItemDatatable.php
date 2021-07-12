<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use App\Models\Item;
class ItemDatatable extends LivewireDatatable
{
//
    public $model = Item::class;

    public $hideable = 'inline';
    public $exportable = true;
//    public $afterTableSlot = 'components.selected';

    public function builder()
    {
        return Item::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id'),

            Column::name('name')->searchable(),

            //DateColumn::name('created_at')->searchable(),


            Column::callback(['id', 'name'], function ($id,$name) {
                return view('components\table-actions',['url' => url("items/$id"), 'model' => 'Items','id' => $id, 'name' => $name]);
//                return view('components\table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}