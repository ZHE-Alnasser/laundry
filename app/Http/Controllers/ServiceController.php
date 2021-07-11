<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        //
    }

    public function manage()
    {
        return view('services/manage');
    }
    public function create()
    {
        return view('services/create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'description' =>'nullable',
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
        return view('services/edit',compact('service'));
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
