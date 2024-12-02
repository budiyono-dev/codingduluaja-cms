<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        dd(auth()->user()->id);
    }

    public function dashboardPage()
    {
        //dd(auth()->user());
        return view('welcome');
    }
}
