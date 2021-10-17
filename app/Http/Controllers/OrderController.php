<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\OrderService;
use App\Models\Service;
use App\Models\TimeFrame;
use App\Models\User;
use BladeUIKit\Components\DateTime\Carbon;
use BladeUIKit\Components\Forms\Inputs\Input;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
//use Symfony\Component\Console\Input\Input;

class OrderController extends Controller
{
    function __construct()
    {
        $this->addMiddlewaresFor('Orders');
        $this->middleware('auth');
    }

    public function manage()
    {
        return view('orders.manage');
    }


    public function index()
    {
        return view('orders.manage');
    }


    public function create()
    {
        $services = Service::all();
//        $items=Item::all();

        $items=Item::all();
        $orders = Order::all();
        $customers = User::customer()->get();
        $employees = User::employee()->get();
        $order = new Order;
        $amount = 1010;
        $serviceOrders = OrderService::all();
        $timeframes = TimeFrame::all();
//        dd($serviceOrders);
        return view('orders.create', compact('customers', 'employees', 'services', 'serviceOrders',
            'order', 'timeframes', 'amount', 'orders','items'));

    }


    public function store(Request $request)
    {
        dd($request);
        $this->validate($request, [
            'sub_total' => 'required',
            'total' => 'required',
            'vat' => 'required',
            'customer_id' => 'nullable',
            'employee_id' => 'required',
            'discount' => 'nullable',
            'payment' => 'required',
//            'process' => 'required',
            'requested_pickup_date' => 'nullable',
            'requested_delivery_date' => 'nullable',
            'agent_pickup_date' => 'nullable',
            'agent_delivery_date' => 'nullable',
            'delivery_time_frame_id' => 'required',
        ]);

        request()->merge(['is_delivery' => $request->is_delivery == 'on' ? true : false],['is_pickup' => $request->is_pickup == 'on' ? true : false]);
        $order = Order::create(
            request()
                ->only('sub_total', 'total', 'vat', 'customer_id', 'employee_id', 'discount', 'payment',
                    'process', 'requested_pickup_date', 'requested_delivery_date', 'agent_pickup_date',
                    'agent_delivery_date', 'delivery_time_frame_id', 'is_delivery','is_pickup'));
//
        if($request->services)
        foreach ($request->services as $service) {
//


            $order->services()->attach($service['service'], [
                'qty' => $service['qty'],
                'price' => $service['price'],
                'amount' => $service['amount']
            ]);
        }

//        $services = $request->input('services', []);
//        $quantities = $request->input('qty', []);
//        $price = $request->input('price', []);
//        $amount = $request->input('amount', []);
//        for ($service = 0; $service < count($services); $service++) {
//
//            if ($services[$service] != '') {
////
//                $order->services()->attach(
//                    $services[$service], [
//                        'qty' => $quantities[$service],
//                        'price' => $price[$service],
//                        'amount' => $amount[$service]
//                    ]
//                );
//
//            }
//        }

        return redirect('orders/manage');
    }

    public function show(Order $order)
    {
        //
    }
    public function vat()
    {
        $orders= Order::all();
        return view('orders/reports/vat',compact('orders'));
    }

public function perMonth()
    {
        $orders= DB::table('orders')->selectRaw('YEAR(created_at) year, MONTH(created_at) month, sum(total)  as total_orders')
//            ->selectRaw(' MONTH(created_at) month, sum(total)  as total_orders')
            ->groupby('year','month')
            ->get();
        return view('orders/reports/per-month',compact('orders'));
    }


    public function edit(Order $order)
    {

        $orders = Order::all();
        $timeframes = TimeFrame::all();

        $serviceOrders=OrderService::all();
        $services = Service::all();
        $items = Item::all();
        $customers = User::customer()->get();
        $employees = User::employee()->get();

        return view('orders/edit', compact('order', 'customers', 'employees', 'items', 'services', 'timeframes', 'orders','serviceOrders'));
    }


    public function update(Request $request, Order $order)
    {
//        dd($request);
        //$order->update($request->all());
        request()->merge(['delivery' => $request->delivery == 'on' ? true : false]);

        $data = request()->validate([
            'sub_total' => 'required',
            'total' => 'required',
            'vat' => 'nullable',
            'customer_id' => 'nullable',
            'employee_id' => 'required',
            'discount' => 'nullable',
            'payment' => 'required',
//            'process' => 'required',
            'requested_pickup_date' => 'nullable',
            'requested_delivery_date' => 'nullable',
            'agent_pickup_date' => 'nullable',
            'agent_delivery_date' => 'nullable',
            'delivery_time_frame_id' => 'required',
            'is_delivery'=>'nullable',
            'is_pickup'=>'nullable'
        ]);
        $order->update($data);


        $services = $request->input('services', []);
        $quantities = $request->input('qty', []);
        $price = $request->input('price', []);
        $amount = $request->input('amount', []);
        for ($service = 0; $service < count($services); $service++) {

            if ($services[$service] != '') {

                $order->services()->detach(
                    $services[$service], [
                        'qty' => $quantities[$service],
                        'price' => $price[$service],
                        'amount' => $amount[$service]
                    ]
                );

                $order->services()->attach(
                    $services[$service], [
                        'qty' => $quantities[$service],
                        'price' => $price[$service],
                        'amount' => $amount[$service]
                    ]
                );
            }
        }

//                }
        return redirect('orders/manage');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back();

    }

    public function invoice(Order $order)
    {
        $employees = User::employee()->get();
        $customers = User::customer()->get();
        $orders = Order::all();
//      dd($customer);
        return view('orders.reports.invoice', compact('order', 'employees', 'customers', 'orders'));
    }



}
