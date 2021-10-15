<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function Login(){
        return view("auth.login");
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function  LoginUser(Request $request){

        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8',],
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user)
        {
           if(Hash::check($request->password,$user->password)){

            $request->session()->put('loginId', $user->id);
            return redirect('dashboard');

           }else{

           }return back()->with('fail', 'password does not  match');
        }else{
            return back()->with('fail', 'email is not registered');
        }

    }

    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }

        return  view('dashboard', compact('data'));
    }

    public function logout(){
        $data=  array();
        if(Session::has('loginId')){
           Session::pull('loginId') ;
           return redirect('login');
        }

        $dt = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
   
   
     


    }

    public function employee(){
        return view('dashboard.Employee');
    }

public function activlogout(){
    $user = Auth::User();
    Session::put('user', $user);
    $user = Session::get('user');

    $name = $user->name;
    $email = $user->email;



    $role_name = $request->role_name;
    $dt = Carbon::now();
    $todayDate = $dt->toDayDateTimeString();

    $activitylog = [
        'name'=>$name,
        'email'=>$email,
        'description' => 'log out',
        'date_time'=> $todayDate
    ];
     return dd($activity);
    DB::table('activity')->insert($activity);
    Auth::logout();
    return redirect('login');

}

public function activelogin(){

    
    $data = array();
    if(Session::has('loginId')){
        $data = User::where('id', '=', Session::get('loginId'))->first();
    }
    $dt = Carbon::now();
    $todayDate = $dt->toDayDateTimeString();

 $activitylog = [
        'name'=>$data->name,
        'email'=>$data->email,
        'description' => 'login',
        'date_time'=> $todayDate
    ];

    DB::table('activities')->insert($activitylog);

    return dd($activitylog);
    
   
}

public function activelogout(){
    $data = array();
    if(Session::has('loginId')){
       $data = User::where('id', '=' ,Session::pull('loginId') )->first();
        
     }

   

}






}