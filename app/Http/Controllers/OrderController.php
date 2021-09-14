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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
//use Symfony\Component\Console\Input\Input;

class OrderController extends Controller
{
    function __construct()
    {

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
        $services=Service::all();
        $items=Item::all();
        $customers = User::customer()->get();
        $employees = User::employee()->get();
        $order=new Order;
        $serviceOrders=OrderService::all();
        $timeframes=TimeFrame::all();
//        dd($serviceOrders);
        return view ('orders.create', compact('customers','employees','items','services','serviceOrders',
            'order', 'timeframes'));

    }


    public function store(Request $request)
    {
//        dd($request);
//$service = Input::get('services');
//        DB::transaction(function () use ($request) {

//            $data = $this->validate($request,[
            $data = request()->validate([
                'without_vat' => 'required',
                'total' => 'required',
                'vat' => 'required',
                'customer_id' => 'nullable',
                'employee_id' => 'required',
                'discount' => 'nullable',
                'payment' => 'required',
                'process' => 'required',
                'requested_pickup_date' => 'nullable',
                'requested_delivery_date' => 'nullable',
                'agent_pickup_date' => 'nullable',
//            'time' => ['required','integer','between:7,21'],
                'time_frame_id' => 'required',
//            'agent_deliver $this->validate($request,y_date'=>'nullable',
//                'item_id.*' => 'required',
//                'service_id.*' => 'required',
//                'quantity.*' => 'required',
//                'amount.*' => 'required',

            ]);

//  dd($data);

           $order= Order::create($data);
////        $order->save();
          $service = $this->validate($request, [
                   'order_id' => 'nullable',
                    'item_id' => 'nullable',
                    'service_id' => 'nullable',
                    'quantity' => 'nullable',
                    'amount' => 'nullable',
//
                ]);
//
////         dd($service);
           $order->services()->attach($service);
////});
//           $order->save();


//            $orderServices = [];
//
//       foreach ($order->services as $productId => $item) {
//                $items = $this->validate($request, [
////                    'order_id' => 'required',
//                    'item_id' => 'required',
//                    'service_id' => 'required',
//                    'quantity' => 'required',
//                    'amount' => 'required',
//
//                ]);
//                        OrderService::insert($orderServices);
//            $orderServices = OrderService::insert($items);
////

//            dd($request->serviceOrders);
////
//            if ($request->serviceOrders) {
//                foreach ($request->serviceOrders as $service) {
////
//                    $order->services()->attach($service);
//
//                    $ordersService = OrderService::where('order_id', $order->id)
//                        ->where('service_id', $service['service_id'])
//                        ->where('item_id',$service['item_id'])
//                        ->first();
////                    if ($service['amount']) {
////                        $ordersService->amount()->create(['value' => $service['amount']]);
////                    }
//
////                    if ($service['quantity']) {
////                        $ordersService->quantity()->create(['value' => $service['quantity']]);
//////                    }
//                }
//            }
//

            $this->validate(
                $request, [
                    'details' => 'nullable',
                ]
            );
//            $items = $request->details;
        $items = json_decode($request->details,true);

//        dd($items);

//        $xx = $x->map(function($item) {

//            return $item;
//        });

//        $user->roles()->sync([1 => ['expires' => true], 2, 3]);


//             validate the details
//             i.e. $item->price == $product->selling_price
            $formattedDetails = collect($items)->transform(function($item) {
                $service = Service::find($item['id']);
                $item['price'] = $service->price;
//                $item['purchasing_price'] = $product->purchasing_price;
                $item['service_id'] = $item['id'];
                unset($item['order_id']);
//                unset($item['name']);
                unset($item['amount']);
//                unset($item['total']);
                return $item;
            });

            $order->services()->sync($formattedDetails);
//
////
//        });

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
