<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\OrderService;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

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
        $services=Service::all();
        $items=Item::all();
        $customers = User::customer()->get();
        $employees = User::employee()->get();

        return view ('orders.create', compact('customers','employees','items','services'));
    }


    public function store(Request $request)
    {
//        $data = $this->validate($request, [
//            'customer_id' => 'required',
//
//
//        ]);
//        $orders= Order::create($data);

//     $orders->Service()->attach('service_id','item_id');

//        if ($request->serviceOrders) {
//            foreach ($request->serviceOrders as $major) {
//
////                $orders->services()->attach($major['major']);
//            }
//        }
//                return redirect('orders/manage')
//            ->with('success', 'Your Services has been created successfully');
//    }
        DB::transaction(function () use ($request) {

            $data = $this->validate($request,[
            'without_vat'=> 'required',
            'total' => 'required',
            'vat' => 'required',
            'customer_id' =>'nullable',
            'employee_id' => 'required',
            'discount' =>'nullable',
            'payment'=>'required',
            'process'=>'required',
            'requested_pickup_date' =>'nullable',
            'requested_delivery_date'=>'nullable',
            'agent_pickup_date' =>'nullable',
            'agent_deliver $this->validate($request,y_date'=>'nullable',
        ]);

           $order= Order::create($data);

            $orderServices = [];
            foreach ($order->services as $items) {
                $items[] = $this->validate($request, [
                    'order_id' => 'required',
                    'item_id' => 'required',
                    'service_id' => 'required',
                    'quantity' => 'required',
                    'amount' => 'required',

                ]);
            }

//                $items = $this->validate($request, [
//                    'order_id' => 'required',
//                    'item_id' => 'required',
//                    'service_id' => 'required',
//                    'quantity' => 'required',
//                    'amount' => 'required',
//
//                ]);
                        OrderService::insert($orderServices);

        });

        return redirect('orders/manage');
    }

    public function show(Order $order)
    {
        //
    }


    public function edit(Order $order)
    {
        $orderService= OrderService::all();
        $serviceOrders=$order->services()->with('order_id','service_id','item_id','amount','quantity');
        $services=Service::all();
        $items=Item::all();
        $customers = User::customer()->get();
        $employees = User::employee()->get();

        return view ('orders/edit',compact('order','customers','employees','items','services','serviceOrders','orderService'));
    }


    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return redirect('orders/manage');
    }

    public function destroy(Order $order)
    {
        //
    }
    public function invoice(Order $order)
    {
      $employees= User::employee()->get();
      $customers=User::customer()->get();
      $orders= Order::all();
//      dd($customer);
        return view('orders.reports.invoice', compact('order','employees','customers','orders'));
    }
}
