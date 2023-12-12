<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    
    public function index() {
        return view('auth.login');
    }


    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
  
        return redirect("/")->withErrors('Login details are not valid');
    }



    public function dashboard()
    {
        
        if(Auth::check()){
            
            $timelines = Timeline::select('month_timeline', 'year_timeline', 'id')->distinct()->get();
            return View::make('pages.dashboard', ['timelines' => $timelines]);
        }
  
        return redirect("/")->withSuccess('You are not allowed to access');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

}
