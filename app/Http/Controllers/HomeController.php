<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manage()
    {


        $orders = Order::whereMonth('created_at',\Carbon\Carbon::now()->month)
            ->orderBy('total','desc')->paginate(30);
// group by customer

        // $latestOrders = Order::latest()->take(10);
//  $orders = Order::whereWeek('created_at',\Carbon\Carbon::now()->week())
//            ->orderBy('total','desc')->paginate(7);


        $today =Order::whereDay('created_at',today())->sum('total');



        $thisMonth = Order::whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('total');

        $thisYear = Order::whereYear('created_at',\Carbon\Carbon::now()->year)->sum('total');
//        dd($thisYear);
        $name = auth()->user()->name;
        $todayCustomers = Order::select('customer_id')->distinct()->whereDay('created_at',today())->count();
        $services = Service::withCount('orders')

            ->orderBy('orders_count', 'desc')->paginate(5);
//
        return view('/dashboard', compact('name','today','thisMonth','todayCustomers','thisYear','services','orders'));
    }
    public function index()
    {
        $thisYear = Order::whereYear('created_at',\Carbon\Carbon::now()->year)->sum('total');

        $orders = Order::whereMonth('created_at',\Carbon\Carbon::now()->subMonth()->month)
            ->orderBy('total','desc')->paginate(30);
        $todayCustomers = Order::select('customer_id')->distinct()->whereDay('created_at',today())->count();

        $today =Order::whereDay('created_at',today())->sum('total');
//dd($today);
        $services = Service::withCount('orders')

            ->orderBy('orders_count', 'desc')->paginate(5);
//

        $thisMonth = Order::whereMonth('created_at',\Carbon\Carbon::now()->subMonth()->month)->sum('total');
        $name = auth()->user()->name;

        return view('/dashboard', compact('name','orders','today','thisMonth','services','todayCustomers','thisYear'));
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
