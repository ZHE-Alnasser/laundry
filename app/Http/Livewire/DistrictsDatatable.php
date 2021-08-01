<?php

namespace App\Http\Livewire;

use App\Models\District;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;


class DistrictsDatatable extends LivewireDatatable
{
    public $model = District::class;

    public $hideable = 'inline';
    public $exportable = true;
//    public $afterTableSlot = 'components.selected';

    public function builder()
    {
        return District::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id'),

            Column::name('name')->searchable(),
            Column::name('code')->searchable(),
            Column::name('city.name')->label(__('City'))->truncate()->searchable(),


            Column::callback(['id', 'name'], function ($id,$name) {
                return view('components\table-actions',['url' => url("districts/$id"), 'model' => 'Districts','id' => $id, 'name' => $name]);
//                return view('components\table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}