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
            NumberColumn::name('id')->label(__('#')),


            Column::callback(['customer_id'], function ($user) {
                return optional(User::find($user))->name;
            })->label(__('Customer Name'))->searchable(),

            Column::callback(['employee_id'], function ($user) {
                return optional(User::find($user))->name;
            })->label(__('Employee Name'))->searchable(),

            Column::name('discount')->label(__('Discount'))->searchable(),
            Column::name('vat')->label(__('VAT'))->searchable(),
            Column::name('sub_total')->label(__('Total amount without VAT'))->searchable(),
            Column::name('total')->label(__('Total amount with VAT'))->searchable(),
            Column::callback(['process'], function ($process) {
                return __('process_'.$process);
            })->searchable()->label(__('Process')),
           Column::name('time_frame_name')->searchable()->label(__('Time Period')),

            DateColumn::name('created_at')->label(__('Created at'))->searchable(),

            Column::callback(['id'], function ($id) {
                return view('components.order-action', ['url' => url("orders/$id"), 'model' => 'Orders', 'id' => $id]);
            })
        ];
    }
}