<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user()->role_id;
        if ($user != 1){
            return redirect('/');
        }
        return view('admin.dashboard.index');
    }
}
