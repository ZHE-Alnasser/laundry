<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    function __construct()
    {
        $this->addMiddlewaresFor('Cities');
        $this->middleware('auth');
    }

    public function manage()
    {
        return view('cities.manage');
    }

    public function index()
    {
        return view('cities.manage');
    }

    public function create()
    {
        return view ('cities/create');
    }

  
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',

        ]);
       City::create($data);


        return redirect('cities/manage')
            ->with('success', __('Your City has been created successfully'));

    }

    public function show(City $city)
    {
        //
    }

   
    public function edit(City $city)
    {
        return view ('cities/edit',compact('city'));
    }

  
    public function update(Request $request, City $city)
    {
        $city->update($request->all());
        return redirect('cities/manage');
    }

    
    public function destroy(City $city)
    {
        $city->delete();
        return back();
    }
}
