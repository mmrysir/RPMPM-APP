<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\Activities;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    //

    public function employee(){
        return view('dashboard.Employee');
    }

    public function timeshet(){
        $time = array();
         $time = Activities::all();

         return dd($time);

    }
}
