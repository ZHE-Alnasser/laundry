<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    function __construct()
    {
        $this->addMiddlewaresFor('Items');
        $this->middleware('auth');
    }

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
//$itemsServices=[];
//        $services= $this->validate($request, [
//            'sname' => 'required',
//            'price'=> 'required',
//             'description'=>'nullable'
//        ]);
//
//        foreach ($services as $service){
//
////            $Serviceitems = Item::where('service_id', $service->id)->where('major_id', $major['major'])
////                ->first();
//
//            $serviceItem= Item::where('item_id')->first();
//            $itemsServices=[
//              'sname'=>$service['sname'],
//                'price'=>$service['price'],
//                'description'=>$service['description']
//            ];
//
//        }
//
//        $items->services()->createMany($itemsServices);


        return redirect('items/manage')
            ->with('success', __('Your Item has been created successfully'));
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
        dd($request);
        $data = request()->validate([
            'name' => 'required',

        ]);
        $item->update($data);

        if ($request->hasFile('image')) {
            $item->media()->delete($this);
            $item->addMediaFromRequest('image')->toMediaCollection('items');
        }
        return redirect('items/manage');



    }


    public function destroy(Item $items)
    {
        $items->delete();
        return back();
    }
}
