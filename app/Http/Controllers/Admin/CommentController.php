<?php

namespace App\Http\Controllers\Admin;

use App\ContactUs;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $orders = ContactUs::get();
        return view('admin.contactus.index',compact('orders'));
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
