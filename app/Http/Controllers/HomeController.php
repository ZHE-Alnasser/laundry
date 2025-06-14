<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\User;
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


        $orders = Order::whereMonth('created_at', \Carbon\Carbon::now()->month)
            ->orderBy('total', 'desc')->paginate(30);

        $topCustomers = User::customer()->withCount('customerOrders')
            ->orderBy('customer_orders_count', 'desc')->take(5)->get();


        $latestOrders = Order::latest()->take(10);


        $today = Order::whereDay('created_at', today())->sum('total');


        $thisMonth = Order::whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('total');

        $thisYear = Order::whereYear('created_at', \Carbon\Carbon::now()->year)->sum('total');
//        dd($thisYear);
        $name = auth()->user()->name;
        $todayCustomers = Order::select('customer_id')->distinct()->whereDay('created_at', today())->count();
        $services = Service::withCount('orders')
            ->orderBy('orders_count', 'desc')->paginate(5);
//
        return view('/dashboard', compact('name', 'today', 'thisMonth', 'todayCustomers', 'thisYear', 'services', 'orders', 'latestOrders', 'topCustomers'));
    }

    public function index()
    {
        $topCustomers = User::customer()->withCount('customerOrders')
            ->orderBy('customer_orders_count', 'desc')->take(5)->get();
        $latestOrders = Order::latest()->take(10);
        $thisYear = Order::whereYear('created_at', \Carbon\Carbon::now()->year)->sum('total');

        $orders = Order::whereMonth('created_at', \Carbon\Carbon::now()->subMonth()->month)
            ->orderBy('total', 'desc')->paginate(30);
        $todayCustomers = Order::select('customer_id')->distinct()->whereDay('created_at', today())->count();

        $today = Order::whereDay('created_at', today())->sum('total');
//dd($today);
        $services = Service::withCount('orders')
            ->orderBy('orders_count', 'desc')->paginate(5);
//

//        $thisMonth = Order::whereMonth('created_at',\Carbon\Carbon::now()->subMonth()->month)->sum('total');
        $thisMonth = Order::whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('total');
        $name = auth()->user()->name;

        return view('/dashboard', compact('name', 'orders', 'today', 'thisMonth', 'services', 'todayCustomers', 'thisYear', 'latestOrders', 'topCustomers'));
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

    public function changeBranch($id)
    {
        session()->put('branch', $id);
    }
}
