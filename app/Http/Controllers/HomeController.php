<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manage()
    {

        $name = auth()->user()->name;

        return view('/dashboard', compact('name'));
    }
    public function index()
    {
//        $firstName = auth()->user()->first_name;
//        $lastName = auth()->user()->last_name;
        return view('/dashboard');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
