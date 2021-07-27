<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
       $services =Service::all();
        return view('services.index', compact('services'));
    }

    public function manage()
    {
        return view('services/manage');
    }
    public function create()
    {
        $items=Item::all();
        return view('services/create',compact('items'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'item_id' =>'nullable',
            'price' => 'required',

        ]);
         Service::create($data);


        return redirect('services/manage')
            ->with('success', 'Your Services has been created successfully');
    }


    public function show(Service $service)
    {
        //
    }


    public function edit(Service $service)
    {
        $items=Item::all();
        return view('services/edit',compact('service','items'));
    }

    public function update(Request $request, Service $service)
    {

        $service->update($request->all());
        return redirect('services/manage');
    }


    public function destroy(Service $service)
    {
        //
    }
}
