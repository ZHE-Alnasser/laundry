<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class BranchDatatable extends LivewireDatatable
{
    public $model = Branch::class;

    public $hideable = 'inline';
    public $exportable = true;


    public function builder()
    {
        return Branch::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')->label(__('#')),

            Column::name('name')->searchable()->label(__('Name')),
            Column::name('address')->searchable()->label(__('Address')),
            Column::name('phone')->searchable()->label(__('Phone')),



            Column::callback(['id'], function ($id) {
                return view('components.table-actions',['url' => url("branches/$id"), 'model' => 'Branch','id' => $id]);
            })
        ];
    }
}
