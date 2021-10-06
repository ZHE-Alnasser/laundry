<?php

namespace App\Http\Livewire;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use Livewire\Component;

class ServicesDatatable extends LivewireDatatable
{
//    public function render()
//    {
//        return view('livewire.services-datatable');
//    }

    public $model = Service::class;

    public $hideable = 'inline';
    public $exportable = true;
//    public $afterTableSlot = 'components.selected';

    public function builder()
    {
        return Service::query()->with('items');

    }
    public function columns()
    {
        return [
            NumberColumn::name('id')->label(__('#')),

            Column::name('name')->label(__('Name'))->searchable(),

//            Column::name('item.name')->searchable(),
            Column::name('price')->label(__('Price'))->searchable(),
            Column::name('description')->label(__('Description'))->searchable(),


            Column::callback(['id', 'name'], function ($id) {
                return view('components.table-actions',['url' => url("services/$id"), 'model' => 'Services']);
//                return view('components\table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
