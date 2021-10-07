<?php

namespace App\Http\Livewire;

use App\Models\Expense;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ExpenseDatatable extends LivewireDatatable
{
    public $model = Expense::class;

    public $hideable = 'inline';
    public $exportable = true;


    public function builder()
    {
        return Expense::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')->label(__('#')),

            Column::name('name')->searchable()->label(__('Name')),
            Column::name('amount')->searchable()->label(__('Amount')),
            Column::name('date')->searchable()->label(__('Date')),
            Column::name('branch_id')->searchable()->label(__('Branch')),



            Column::callback(['id'], function ($id) {
                return view('components.table-actions',['url' => url("expenses/$id"), 'model' => 'Expense','id' => $id]);
            })
        ];
    }
}
