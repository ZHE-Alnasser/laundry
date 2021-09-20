<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class RolesDatatable extends LivewireDatatable
{
    public $model = Role::class;

    public function builder()
    {
        return Role::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')->label(__('#')),
            Column::name('name')->searchable()->label(__('name').' '.__('Role')),

            Column::callback(['slug'], function ($slug) {
                return view('components.table-actions', ['url' => url("roles/$slug"), 'model' => 'Roles']);
            })
        ];
    }
}
