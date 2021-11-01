<?php

namespace App\Http\Livewire;

use App\Models\TimeFrame;
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


    public function builder()
    {
        return Order::query()->withTrashed()->with('users');


    }

    public function columns()
    {
        return [
            NumberColumn::name('id')->label(__('#'))->searchable(),


            Column::callback(['customer_id'], function ($user) {
                return optional(User::find($user))->name;
            })->label(__('Customer Name'))->searchable(),


            Column::name('total')->label(__('Total amount with VAT'))->searchable(),
            Column::callback(['process'], function ($process) {
                return __('process_' . $process);
            })->searchable()->label(__('Process'))->filterable(),
            Column::callback(['delivery_time_frame_id'], function ($timeframe) {
                return optional(TimeFrame::find($timeframe))->name;
            })->searchable()->label(__('Time Period')),


            Column::callback(['id','deleted_at'], function ($id,$deletedAt) {

                return view('components.order-action', ['url' => url("orders/$id"), 'model' => 'Orders', 'id' => $id,'deletedAt'=>$deletedAt]);
            })
        ];
    }
}
