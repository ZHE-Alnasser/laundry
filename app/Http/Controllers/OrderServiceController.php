<?php

namespace App\Http\Controllers;

use App\Models\OrderService;
use Illuminate\Http\Request;

class OrderServiceController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'order_id' => 'required',
            'item_id' =>'nullable',
            'service_id' => 'required',
            'quantity' => 'required',
            'amount' => 'required',

        ]);
        OrderService::create($data);


        return redirect('orders/manage')
            ->with('success', 'Your Services has been created successfully');
    }

    public function show(OrderService $orderService)
    {
        //
    }


    public function edit(OrderService $orderService)
    {
        //
    }


    public function update(Request $request, OrderService $orderService)
    {
        //
    }


    public function destroy(OrderService $orderService)
    {
        {
            $orderService->delete();
            return back();
        }
    }
}
