<?php

namespace App\Http\Controllers;

use App\Models\branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{

    function __construct()
    {
        $this->addMiddlewaresFor('Branches');
        $this->middleware('auth');
    }

    public function manage()
    {
        return view('branches.manage');
    }
    public function index()
    {
        return view('branches.manage');
    }

    public function create()
    {
        return view('branches/create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'address' => 'required',
            'phone' => ['required', 'digits:10'],

        ]);
        Branch::create($data);


        return redirect('branches/manage')
            ->with('success', 'Your Branch has been created successfully');
    }


    public function show(branch $branch)
    {

    }


    public function edit(branch $branch)
    {
        return view('branches/edit',compact('branch'));
    }


    public function update(Request $request, branch $branch)
    {
        $branch->update($request->all());
        return redirect('branches/manage');
    }


    public function destroy(branch $branch)
    {
        $branch->delete();
        return back();
    }
}
