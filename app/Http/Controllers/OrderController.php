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
//        $items=Item::all();
        $orders=Order::all();
        $customers = User::customer()->get();
        $employees = User::employee()->get();
        $order=new Order;
        $amount=1010;
        $serviceOrders=OrderService::all();
        $timeframes=TimeFrame::all();
//        dd($serviceOrders);
        return view ('orders.create', compact('customers','employees','services','serviceOrders',
            'order', 'timeframes','amount','orders'));

    }


    public function store(Request $request)
    {
//        $ser = Session::get('cart');
//        $cart = new Cart($oldCart)
//        dd($request);
//$service = Input::get('services');
//        DB::transaction(function () use ($request) {

//            $data = $this->validate($request,[
            $data = request()->validate([
                'sub_total' => 'required',
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
//
           $order= Order::create($data);
////////        $order->save();
//          $service = $this->validate($request, [
//                   'order_id' => 'nullable',
////                    'item_id' => 'nullable',
//                    'service_id' => 'nullable',
//                    'quantity' => 'nullable',
//                    'amount' => 'nullable',
////
//                ]);
////
//////         dd($service);
//           $order->services()->attach($service);
////});
//           $order->save();
//        $services[] =  $request->serviceOrders;
//
//        if ($request->serviceOrders) {
//            foreach ($services as $details) {
//                $orderDetails = new OrderService();
//                $orderDetails->order_id = $order->id;
//                $orderDetails->service_id = $details['service'];
//                $orderDetails->quantity = $details['quantity'];
//                $orderDetails->quantity = $details['amount'];
//                $quantity = $details['quantity'] ? $details['quantity'] : 1;
////            $servicePrice = Service::find($details['service_id']);
//                $orderDetails->save();
//            }
//        }
//            $orderServices = [];
//       foreach ($order->services as $productId => $items) {
//           $items = $this->validate($request, [
////                    'order_id' => 'required',
//               'item_id' => 'required',
//               'service_id' => 'required',
//               'quantity' => 'required',
//               'amount' => 'required',
//
//           ]);
//           dd($orderServices);
//       }
//                        OrderService::insert($orderServices);
//            $orderServices = OrderService::insert($items);
////

//            dd($request->serviceOrders);
        $services = $request->input('services', []);
        $quantities = $request->input('qty', []);
        $price=$request->input('price', []);
        for ($service=0; $service < count($services); $service++) {

            if ($services[$service] != '') {
//
                $order->services()->attach(
                    $services[$service], [
                        'qty' => $quantities[$service],
                        'price' => $price[$service]
                    ]
                );

            }
        }
//dd($services);
//            if ($request->serviceOrders) {
//                foreach ($request->serviceOrders as $service) {
//
//                    $order->services()->attach($service['service']);
//                    $orderService = OrderService::where('order_id', $order->id)->where('service_id', $service['service'])
//                        ->first();
//                    if ($service['amount']) {
//                        $orderService->amount()->create(['value' => $service['amount']]);
//                    }
//
//                    if ($service['quantity']) {
//                        $orderService->quantity()->create(['value' => $service['quantity']]);
//                    }
////dd($service);
//                }
//            }
//                    $ordersService = OrderService::where('order_id', $order->id)
//                        ->where('service_id', $service['service_id'])
//                        ->where('item_id',$service['item_id'])
//                        ->first();

//                }
////            }

//
//            $this->validate(
//                $request, [
//                    'details' => 'nullable',
////                ]
////            );
//////            $items = $request->details;
//        $items = json_decode($request->details,true);
//
////        dd($items);
//
////        $xx = $x->map(function($item) {
//
////            return $item;
////        });
//
////=================================================================================
//        1. format of the array
//
//        $services[] =  $request->serviceOrders;
//
//        if ($request->serviceOrders) {
//
//            foreach ($services as $serviceOrders) {
////                dd( $serviceOrder);
//////        $user->roles()->sync([1 => ['expires' => true], 2, 3]);
//
//                $order->services()->attach([$serviceOrders['service'] =>
//                    ['amount' => $serviceOrders['amount'],'quantity'=>$serviceOrders['quantity']]]);
//////dd($service);
//            }
//        }
//=================================================================================
////             validate the details
////             i.e. $item->price == $product->selling_price
//            $formattedDetails = collect($items)->transform(function($item) {
//                $service = Service::find($item['id']);
//                  $item['amount'] = $service->amount;
//                  $item['quantity'] = $service->quantity;
////                  $item['item_id'] = $service->item_id;
//                  $item['service_id_id'] = $service->service_id;
////                $item['purchasing_price'] = $product->purchasing_price;
//                $item['service_id'] = $item['id'];
//                unset($item['order_id']);
////                unset($item['name']);
////                unset($item['amount']);
////                unset($item['total']);
//                return $item;
//            });
////
//            $order->services()->sync($formattedDetails);
////
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
        $orders=Order::all();
        $timeframes=TimeFrame::all();
//        $orderService= OrderService::all();
//        $serviceOrders=$order->services()->with('amount','quantity');
//        $serviceOrders=OrderService::all();
        $services=Service::all();
        $items=Item::all();
        $customers = User::customer()->get();
        $employees = User::employee()->get();

        return view ('orders/edit',compact('order','customers','employees','items','services','timeframes','orders'));
    }


    public function update(Request $request, Order $order)
    {
//        dd($request);
        //$order->update($request->all());
        $data = request()->validate([
            'sub_total' => 'required',
            'total' => 'required',
            'vat' => 'nullable',
            'customer_id' => 'nullable',
            'employee_id' => 'required',
            'discount' => 'nullable',
            'payment' => 'required',
            'process' => 'required',
            'requested_pickup_date' => 'nullable',
            'requested_delivery_date' => 'nullable',
            'agent_pickup_date' => 'nullable',
            'time_frame_id' => 'required',

        ]);
        $order->update($data);
      $order->services()->detach();

        $services = $request->input('services', []);
        $quantities = $request->input('qty', []);
        for ($service=0; $service < count($services); $service++) {
//            dd($services[$service]);
            if ($services[$service] != '') {
                $order->services()->attach($services[$service], ['qty' => $quantities[$service]]);
            }
        }
//        if ($request->serviceOrders) {
//            foreach ($request->serviceOrders as $service) {
//
//                $order->services()->attach($service['service']);
//                $orderService = OrderService::where('order_id', $order->id)->where('service_id', $service['service'])
//                    ->first();
//                if ($service['amount']) {
//                    $orderService->amount()->delete();
//                }
//                    $orderService->amount()->create(['value' => $service['amount']]);
//                }
//
//                if ($service['quantity']) {
//                    $orderService->quantity()->delete();
//                }
//                    $orderService->quantity()->create(['value' => $service['quantity']]);
//                }
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
