<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;
use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ActivitiesDatatable extends LivewireDatatable
{
    public $modelName = null;


    public function builder()
    {
//        $modelName = 'App\Models\\' . ucwords($this->modelName);
//        return Activity::whereSubjectType($modelName)->latest();
       $modelName = 'App\Models\Order';
        return Activity::whereSubjectType($modelName)->latest();
    }

    public function columns()
    {
        return [
            Column::callback(['description'], function ($description) {
                return "<span class='font-bold f'>" . __("$description") . "</span>";
            })->label(__('Description'))->searchable(),

            Column::callback(['causer_id'], function ($causer) {
                return optional(User::find($causer))->name;
            })->label(__('username'))->searchable(),

            Column::callback(['properties'], function ($activity) {
                return view('components.changes', ['properties' => $activity]);
            })->label(__('Changes'))

        ];
    }
}
