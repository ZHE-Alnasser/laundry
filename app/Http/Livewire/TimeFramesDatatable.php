<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Facades\DB;
use App\Models\TimeFrame;


class TimeFramesDatatable extends LivewireDatatable
{

    public $model = TimeFrame::class;

    public $hideable = 'inline';
    public $exportable = true;
//    public $afterTableSlot = 'components.selected';
//
    public function builder()
    {
        return TimeFrame::query();

    }
    public function columns()
    {
        return [
            NumberColumn::name('id')->label(__('#')),

            Column::name('name')->label(__('Name'))->searchable(),

            Column::name('description')->label(__('Description'))->searchable(),
//            DateColumn::name('created_at')->label('Created at')->searchable(),


            Column::callback(['id', 'name'], function ($id,$name) {
//                return view('components\table-actions',['url' => url("services/$slug"), 'model' => 'TimeFrames']);
//                return view('components\table-actions', ['id' => $id,'name' => $name]);
                return view('components\table-actions',['url' => url("timeframes/$id"), 'model' => 'TimeFrames','id' => $id, 'name' => $name]);

            })
        ];
    }


}
