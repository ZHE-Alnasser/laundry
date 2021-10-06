<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    function __construct()
    {
        $this->addMiddlewaresFor('Districts');
        $this->middleware('auth');
    }


    public function manage()
    {
        return view('districts.manage');
    }

    public function index()
    {
        return view('districts.manage');
    }


    public function create()
    {
        $cities=City::all();
        return view('districts.create',compact('cities'));
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'city_id' => 'required',
            'code' => 'required',

        ]);
        District::create($data);


        return redirect('districts/manage')
            ->with('success', __('Your District has been created successfully'));
    }


    public function show(District $district)
    {
        //
    }


    public function edit(District $district)
    {
        $cites =City::all();
        return view('districts.edit',compact('cites','district'));
    }


    public function update(Request $request, District $district)
    {
        $district->update($request->all());
        return redirect('districts/manage');
    }

    public function destroy(District $district)
    {
        $district->delete();
        return back();
    }
}
