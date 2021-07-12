<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UsersDatatable extends LivewireDatatable
{
    public $model = User::class;

    public $hideable = 'inline';
    public $exportable = true;

    public function builder()
    {
        return User::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id'),

            Column::name('first_name')->searchable(),
            Column::name('last_name')->searchable(),
            Column::name('email')->truncate()->searchable(),
            Column::name('address_1')->searchable(),
            Column::name('address_2')->searchable(),
            Column::name('type.name')->label(__('Type'))->truncate()->searchable(),
            Column::name('phone')->label(__('Phone'))->searchable(),

            DateColumn::name('created_at')->searchable(),


            Column::callback(['id'], function ($id) {
                return view('components\table-actions',['url' => url("users/$id"), 'model' => 'Users','id' => $id]);
            })
        ];
    }

}