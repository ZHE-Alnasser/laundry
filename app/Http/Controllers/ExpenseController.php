<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    function __construct()
    {
        $this->addMiddlewaresFor('Expenses');
        $this->middleware('auth');
    }

    public function manage()
    {
        return view('expenses.manage');
    }
    public function index()
    {
        return view('expenses.manage');
    }


    public function create()
    {
        return view('expenses/create');
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'amount' => 'required',

        ]);
         Expense::create($data);


        return redirect('expenses/manage')
            ->with('success', __('Your Expense has been created successfully'));
    }


    public function show(Expense $expense)
    {
        //
    }

   
    public function edit(Expense $expense)
    {
        return view ('expenses/edit',compact('expense'));
    }


    public function update(Request $request, Expense $expense)
    {
        $expense->update($request->all());
        return redirect('expenses/manage');
    }

 
    public function destroy(Expense $expense)
    {
        $expense->delete();
        return back();
    }
}
