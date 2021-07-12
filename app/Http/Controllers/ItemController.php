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
        //
    }


    public function create()
    {
        return view('items/create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',

        ]);
        Item::create($data);


        return redirect('items/manage')
            ->with('success', 'Your Services has been created successfully');
    }


    public function show(Item $items)
    {
        //
    }

    public function edit(Item $item)
    {
        return view('items/edit',compact('item'));
    }


    public function update(Request $request, Item $item)
    {
        $item->update($request->all());
        return redirect('items/manage');
    }


    public function destroy(Item $items)
    {
        //
    }
}
