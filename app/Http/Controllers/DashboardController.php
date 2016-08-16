<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('donation_user');
    }

    public function home()
    {
        return view('dashboard/index');
    }
}
