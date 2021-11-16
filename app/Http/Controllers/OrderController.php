<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\City;
use App\Models\District;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderService;
use App\Models\Service;
use App\Models\Setting;
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
        $branches=Branch::all();
        $items=Item::all();
        $orders = Order::all();
        $customers = User::customer()->get();
        $employees = User::employee()->get();
        $order = new Order;
        $districts =District::all();
        $cities=City::all();
        $serviceOrders = OrderService::all();
        $timeframes = TimeFrame::all();
//        dd($serviceOrders);
        return view('orders.create', compact('customers', 'employees', 'services', 'serviceOrders',
            'order', 'timeframes', 'orders','branches','items','districts','cities'));


    }


    public function store(Request $request, Order $order)
    {
        $request->merge(['branch_id'=> session()->get('branch')]);

        $this->validate($request, [
            'sub_total' => 'nullable',
            'total' => 'nullable',
            'vat' => 'nullable',
            'customer_id' => 'nullable',
            'employee_id' => 'required',
            'discount' => 'nullable',
            'payment' => 'required',
//            'process' => 'required',
            'requested_pickup_date' => 'nullable',
            'requested_delivery_date' => 'nullable',
            'agent_picked_up_date' => 'nullable',
            'agent_delivered_date' => 'nullable',
            'delivery_time_frame_id' => 'nullable',
            'pickup_time_frame_id'=>'nullable',
            'is_delivery'=>'nullable',
            'is_pickup'=>'nullable',
            'branch_id'=> 'required',
            'district_id','nullable',
            'services'=>'required'


        ]);

//       $request->merge(['is_pickup' => $request->is_pickup == 'on' ? true : false]);
       $request->merge(['branch_id' =>  session('branch')]);
        $order = Order::create(
           $request
                ->only('sub_total', 'total', 'vat', 'customer_id', 'employee_id', 'discount', 'payment',
                    'process','requested_pickup_date', 'agent_picked_up_date', 'requested_delivery_date', 'agent_pickup_date',
                    'agent_delivered_date', 'delivery_time_frame_id', 'branch_id','district_id','pickup_time_frame_id','is_delivery','is_pickup'));



        if($request['services'])

            $syncObject = [];
        foreach ($request['services'] as $service) {
//                  dd($service);
            $syncObject[$service['id']] = [
                'quantity' => $service['quantity'],
                'price' => $service['price'],
                'total' => $service['total']
            ];

        }
        $order->services()->sync($syncObject);
//                }
//
//foreach(Order::all() as $order)
        return redirect('orders/reports/invoice/'.$order->id);
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
            ->groupby('year','month')
            ->get();
        return view('orders/reports/per-month',compact('orders'));
    }


    public function edit(Order $order)
    {
        $branches=Branch::all();
        $orders = Order::all();
        $timeframes = TimeFrame::all();
        $districts =District::all();
        $cities=City::all();
        $serviceOrders=OrderService::all();
        $services = Service::all();
        $items = Item::all();
        $customers = User::customer()->get();
        $employees = User::employee()->get();

        return view('orders.edit', compact('order', 'customers', 'employees', 'items', 'services', 'timeframes','branches', 'orders','serviceOrders','districts','cities'));
    }


    public function update(Request $request, Order $order)
    {
        $request->merge(['branch_id'=> session()->get('branch')]);

        //   dd($request);
        //$order->update($request->all());
       $request->merge(['delivery' => $request->delivery == 'on' ? true : false]);

        $data =$request->validate([
            'sub_total' => 'nullable',
            'total' => 'nullable',
            'vat' => 'nullable',
            'customer_id' => 'nullable',
            'employee_id' => 'required',
            'discount' => 'nullable',
            'payment' => 'required',
//            'process' => 'required',
            'requested_pickup_date' => 'nullable',
            'requested_delivery_date' => 'nullable',
            'agent_picked_up_date' => 'nullable',
            'agent_delivered_date' => 'nullable',
            'delivery_time_frame_id' => 'nullable',
            'pickup_time_frame_id'=>'nullable',
            'branch_id'=>'required',
            'is_delivery'=>'nullable',
            'is_pickup'=>'nullable',
            'district_id','nullable',
            'services'=>'required'
        ]);
        $request->merge(['branch_id' =>  session('branch')]);

        $order->update($data);


if($request['services'])
                 $syncObject = [];
              foreach ($request['services'] as $service) {


                  $syncObject[$service['id']] = [
                    'quantity' => $service['quantity'],
                    'price' => $service['price'],
                    'total' => $service['total']
                ];

            }
        $order->services()->sync($syncObject);
//                }
        return redirect('orders/reports/invoice/'.$order->id);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back();

    }

    public function invoice($id)
    {

        $order = Order::withTrashed()->find($id);

        http://laundry.test/orders/reports/invoice/3643
        $setting=Setting::all();
        $employees = User::employee()->get();
        $customers = User::customer()->get();
        $orders = Order::all();
 $branches=Branch::all();
//      dd($customer);
        return view('orders.reports.invoice', compact('order', 'employees', 'customers', 'orders','setting','branches'));
    }



}
