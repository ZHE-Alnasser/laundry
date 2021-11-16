<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
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
        $branches=Branch::all();
        return view('expenses.manage',compact('branches'));
    }
    public function index()
    {
        return view('expenses.manage');
    }


    public function create(Expense $expense)
    {
        $categories = Category::ofType('expenses')->get();
        $branches=Branch::all();
        return view('expenses.create',compact('branches','categories','expense'));
    }


    public function store(Request $request)
    {
        $request->merge(['branch_id'=> session()->get('branch')]);

        $data = $this->validate($request, [
            'name' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'branch_id'=>'nullable',
            'category_id'=>'nullable'

        ]);
        $request->merge(['branch_id' =>  session('branch')]);

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
//        $categories=Category::all();
        $categories = Category::ofType('expenses')->get();
        $branches=Branch::all();
        return view ('expenses.edit',compact('expense','branches','categories'));
    }


    public function update(Request $request, Expense $expense)
    {

        $request->merge(['branch_id' =>  session('branch')]);

        $expense->update($request->all());
        return redirect('expenses/manage')->withSuccess(__(':attribute Has Been Updated',['attribute'=>__('Expense')]));
    }

 
    public function destroy(Expense $expense)
    {
        $expense->delete();
        return back();
    }

    public function categories()
    {
        return Category::where('type','expenses')->get();
    }
}
