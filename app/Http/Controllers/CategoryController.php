<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function __construct()
    {
//        $this->addMiddlewaresFor('Category');
        $this->middleware('auth');
    }
    public function manage()
    {
        return view('categories.manage');
    }

    public function index()
    {
        return view('categories.manage');
    }


    public function create()
    {
        return view('categories/create');
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',

        ]);
        Category::create($data);


        return redirect('categories/manage')
            ->with('success', __('Your Category has been created successfully'));

    }


    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories/edit',compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect('categories/manage')->withSuccess(__(':attribute Has Been Updated',['attribute'=>__('Category')]));
    }


 
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
