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
        return Service::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id'),

            Column::name('name')->searchable(),

            Column::name('description')->searchable(),
            Column::name('price')->searchable(),

            DateColumn::name('created_at')->searchable(),


            Column::callback(['id', 'name'], function ($id,$name) {
                return view('components\table-actions',['url' => url("services/$id"), 'model' => 'Services','id' => $id, 'name' => $name]);
//                return view('components\table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
