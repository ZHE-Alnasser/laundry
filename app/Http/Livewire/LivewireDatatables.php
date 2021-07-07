<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LivewireDatatables extends LivewireDatatable
{
    public $model = User::class;
//    public function render()
//    {
//        return view('livewire.livewire-datatables');
//    }

//    public function builder()
//    {
//        return User::query();
//    }
    public function columns()
    {
        return [
            NumberColumn::name('id')->filterable(),

            Column::name('name')->filterable()->searchable(),

            Column::name('email')->truncate()->filterable()->searchable(),

            DateColumn::name('created_at')->filterable(),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }

}
