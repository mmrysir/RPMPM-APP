<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\activities;
use DB;

class EmployeeController extends Controller
{
    //

    public function employee(){
        return view('dashboard.Employee');
    }

    public function add()
    {
        return view('dashboard.addEmployee');
    }

    public function addemployee(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'email'],
            'email' => ['required', 'string'],
            'department' => ['required', 'string'],
        ]);

        $user = new Employee();
        $user->name = $request->name;
         $user->email =$request->email;
         $user->department = $request->department;
        $res = $user->save();
        if($res){
            return back()->with('succes', 'you have added succefuly');
        }else{
            return back()->with('fail', 'something worong');
        }

    }

    public function loginlogout(){
        
    }


    public function timesheet(){
        $activities = DB::table('activities')->get();
    
    
       
      return  view('dashboard.Employee',compact('activities') );
        
    }
    
}
