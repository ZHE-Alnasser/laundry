<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Service;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

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
        $services=$item->services()->get();
        return view('items/create',compact('item','services'));
    }

    public function store(Request $request)
    {

        $data = $this->validate($request, [
            'name' => 'required|unique:items',

        ]);
        $item= Item::create($data);

        if ($request->hasFile('image')) {
            $item->addMediaFromRequest('image')->toMediaCollection('items');
        }


        // $services form
        $servicesIds = [];
        foreach($request->services as $service ){
            $servicesIds[] =  Service::create(['item_id'=>$item->id,'name'=>$service['name'],'price'=>$service['price']]);
//            $servicesIds[] =  Service::create(['item_id'=>1,'name'=>$service->name,'price'=>$service->price]);

        }
//        $item->services()->sync($servicesIds);


        return redirect('items/manage')
            ->with('success', __('Your Item has been created successfully'));
    }


    public function show(Item $item)
    {
       return view('items.show',compact('item'));
    }

    public function edit(Item $item)
    {
        $services=$item->services()->get();

        return view('items/edit',compact('item','services'));
    }


    public function update(Request $request, Item $item)
    {

        $data = request()->validate([
            'name' => 'required',


        ]);

        if ($request->hasFile('image')) {
//            dd($item->media());
            $item->media()->delete();
        $item->addMediaFromRequest('image')->toMediaCollection('items');
        }
        $item->update($data);


        if($item->services())
            $item->services()->delete();
        $servicesIds = [];
        foreach($request->services as $service ) {
            $servicesIds[] = Service::create(['item_id' => $item->id, 'name' => $service['name'], 'price' => $service['price']]);
        }

        return redirect('items/manage')->withSuccess(__(':attribute Has Been Updated',['attribute'=>__('Item')]));



    }


    public function destroy(Item $item)
    {
        $item->delete();
        return back();
    }
}
