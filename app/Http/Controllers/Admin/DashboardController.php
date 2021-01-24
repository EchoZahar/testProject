<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('role:administrator') ??
//        $this->middleware('role:project-manager') ??
//        $this->middleware('role:web-developer');
    }
    public function staticData()
    {
        return view('admin.dashboard');
    }
}
