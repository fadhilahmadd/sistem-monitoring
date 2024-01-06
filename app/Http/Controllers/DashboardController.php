<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        if (auth()->user()->level == 1) {
            return view('admin.dashboard');
        } else {
            return view('pengguna.dashboard');
        }
    }
}