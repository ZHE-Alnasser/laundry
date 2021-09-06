<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{


    public function manage()
    {
        return view('items.manage');
    }
    public function index()
    {
        return view('items.manage');
    }


    public function create(Item $item)
    {
        return view('items/create',compact('item'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',

        ]);
        $items= Item::create($data);

        if ($request->hasFile('image')) {
            $items->addMediaFromRequest('image')->toMediaCollection('items');
        }


        return redirect('items/manage')
            ->with('success', 'Your Services has been created successfully');
    }


    public function show(Item $item)
    {
       return view('items.show',compact('item'));
    }

    public function edit(Item $item)
    {
        return view('items/edit',compact('item'));
    }


    public function update(Request $request, Item $item)
    {
        $item->update($request->all());
        if ($request->hasFile('image')) {
            $item->media()->delete($this);
            $item>addMediaFromRequest('image')->toMediaCollection('items');
        }
        return redirect('items/manage');



    }


    public function destroy(Item $items)
    {
        $items->delete();
        return back();
    }
}
