<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use App\Models\City;

class CitiesDatatable extends LivewireDatatable
{
    public $model = City::class;

    public $hideable = 'inline';
    public $exportable = true;
//    public $afterTableSlot = 'components.selected';

    public function builder()
    {
        return City::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id'),

            Column::name('name')->searchable()->label(__('Name')),



            Column::callback(['id'], function ($id) {
                return view('components\table-actions',['url' => url("cities/$id"), 'model' => 'Cities','id' => $id]);
            })
        ];
    }
}
