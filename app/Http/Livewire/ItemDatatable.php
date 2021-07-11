<?php

namespace App\Http\Livewire;

use Livewire\Component;



use Illuminate\Support\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use App\Models\Item;
class ItemData extends LivewireDatatable
{
//
    public $hideable = 'inline';
    public $exportable = true;

    public function builder()
    {
        return Item::query();
    }

//    public function columns()
//    {
//        return [
//            NumberColumn::name('id')
//                ->label('ID')
//                ->filterable()
//                ->linkTo('user', 6),
//
//

//            Column::name('weapons.name')
//                ->filterable($this->weapons->pluck('name'))
//                ->label('Weapon Names'),
//
//            NumberColumn::name('weapons.id:count')
//                ->filterable()
//                ->label('Weapon Count'),
//
//            NumberColumn::name('weapons.id:group_concat')
//                ->filterable()
//                ->label('Weapon Concat'),
//
//            NumberColumn::name('weapons.id:sum')
//                ->filterable()
//                ->label('Weapon Sum'),
//
//            NumberColumn::name('weapons.id:avg')
//                ->filterable()
//                ->label('Weapon Avg'),
//
//            NumberColumn::name('weapons.id:min')
//                ->filterable()
//                ->label('Weapon Min'),
//
//            NumberColumn::name('weapons.id:max')
//                ->filterable()
//                ->label('Weapon Max'),
//        ];
//    }
//
//    public function getPlanetsProperty()
//    {
//        return Planet::pluck('name');
//    }
//
//    public function getRegionsProperty()
//    {
//        return Region::pluck('name');
//    }
//
//    public function getWeaponsProperty()
//    {
//        return Weapon::all();
//    }
    public function columns()
    {
        return [
            NumberColumn::name('id')->label(__('#')),
            Column::name('name')
                ->label(__(' Name'))->searchable(),
            Column::name('description')
                ->label(__('Description'))->searchable(),
            Column::name('Price')
                ->label(__('price'))->searchable(),

//            BooleanColumn::name('is_active')
//                ->label(__('Approved')),

            Column::callback(['id'], function ($id) {
                return view('components/table-actions', ['url' => url("items/$id"), 'model' => 'Item']);
//                return view('r', ['url' => url("items/$id"), 'model' => 'Item']);
            })
        ];
    }
//    public function bedtime($date)
//    {
//        if (!$date) {
//            return;
//        }
//        return Carbon::parse($date)->isPast()
//            ? Carbon::parse($date)->addDay()->diffForHumans(['parts' => 2])
//            : Carbon::parse($date)->diffForHumans(['parts' => 2]);
//    }
}