<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::get();
        return view('admin.order.index',compact('orders'));
    }
    
    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        if(!$data = Order::find($id)){
            return redirect()->back();
        }

        $data->delete();
        return redirect()->back();
    }
}
