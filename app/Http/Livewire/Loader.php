<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
class Loader extends Component
{
    public $item;

    protected $listeners = ['modalOpen' => 'updateModal'];

    public $text = 'Foo';

    public function updateModal(Request $request)
    {
        sleep(3);

        if ($request->hasFile('image')) {
//            dd($item->media());
            $this->item->media()->delete();
            $this->item->addMediaFromRequest('image')->toMediaCollection('items');
        }
    }
    public function render()
    {
        return view('components.loader');
    }
}
