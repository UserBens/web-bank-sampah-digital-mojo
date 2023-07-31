<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        return view('admin.dashboard.layouts.main');
    }

    public function beranda() 
    {
        return view('admin.beranda.index');
    }
}
