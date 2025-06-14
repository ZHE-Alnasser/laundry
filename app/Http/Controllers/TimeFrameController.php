<?php

namespace App\Http\Controllers;

use App\Models\TimeFrame;
use Illuminate\Http\Request;

class TimeFrameController extends Controller
{
    function __construct()
    {

        $this->middleware('auth');
    }



    public function manage()
    {
        return view('timeframes/manage');
    }
    public function create()
    {

        return view('timeframes/create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'description' =>'required',

        ]);
        TimeFrame::create($data);


        return redirect('settings')
            ->with('success', __('Your Time Frame has been created successfully'));
    }


    public function show(TimeFrame $timeframe)
    {
        return view('timeframes.show',compact('timeframe'));

    }


    public function edit(TimeFrame $timeframe)
    {

        return view('timeframes/edit',compact('timeframe'));
    }

    public function update(Request $request, TimeFrame $timeframe)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'description' =>'required',

        ]);

        $timeframe->update($data);
        return redirect('settings')->withSuccess(__(':attribute Has Been Updated',['attribute'=>__('Time Frame')]));
    }


    public function destroy(TimeFrame $timeframe)
    {
        {
            $timeframe->delete();
            return back();
        }
    }
}
