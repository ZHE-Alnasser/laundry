<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrderDatatable extends LivewireDatatable
{

    public $model = Order::class;

    public $hideable = 'inline';
    public $exportable = true;

//    public $afterTableSlot = 'components.selected';

    public function builder()
    {
        return Order::query()->with('users');

    }

    public function columns()
    {
        return [
            NumberColumn::name('id'),

            Column::callback(['employee_id'], function ($user) {
                return optional(User::find($user))->full_name;
            })->label(__('Employee Name'))->searchable(),

            Column::callback(['customer_id'], function ($user) {
                return optional(User::find($user))->full_name;
            })->label(__('Customer Name'))->searchable(),

            Column::name('discount')->searchable(),
            Column::name('vat')->searchable(),
            Column::name('without_vat')->searchable(),
            Column::name('total')->searchable(),
            Column::callback(['process'], function ($process) {
                return __('process_'.$process);
            })->searchable()->label(__('Order State')),

            DateColumn::name('created_at')->searchable(),

            Column::callback(['id'], function ($id) {
                return view('components\table-actions', ['url' => url("orders/$id"), 'model' => 'Orders', 'id' => $id]);
            })
        ];
    }
}