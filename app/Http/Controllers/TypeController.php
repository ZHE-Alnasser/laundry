<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    function __construct()
    {
        $this->addMiddlewaresFor('Type');
        $this->middleware('auth');
    }
    public function manage()
    {
        return view('types.manage');
    }

    public function index()
    {
        return view('types.manage');
    }

   
    public function create()
    {
        return view ('types/create');
    }

 
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',

        ]);
        Type::create($data);


        return redirect('types/manage')
            ->with('success', 'Your Services has been created successfully');
    
    }

   
    public function show(Type $type)
    {
        //
    }

  
    public function edit(Type $type)
    {
        return view ('types/edit',compact('type'));
    }

   
    public function update(Request $request, Type $type)
    {
        $type->update($request->all());
        return redirect('types/manage');
    }

   
    public function destroy(Type $type)
    {
        $type->delete();
        return back();
    }
}
