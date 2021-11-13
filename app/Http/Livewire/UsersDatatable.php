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
    public $table='users';

    public function builder()
    {
        return User::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')->label(__('#')),

            Column::name('name')->label(__('Name'))->searchable(),
            Column::name('district.name')->label(__('District'))->truncate()->searchable(),
            Column::name('phone')->label(__('Phone'))->searchable(),



            Column::callback(['id'], function ($id) {
                return view('components.table-actions',['url' => url("users/$id"), 'model' => 'Users','id' => $id]);
            })
        ];
    }

}