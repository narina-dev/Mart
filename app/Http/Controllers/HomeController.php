<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendMail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
      public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showChangePasswordForm(){
        
        return view('auth.passwords.changepassword');
    }

    public function updatePassword(Request $request){
        $this->validate($request, [
            'password' =>'required|confirmed'
        ]);

        $user=Auth::user();
        // $user->name=$request->name;
        $user->password=bcrypt($request->password);
        $user->save();

        return redirect()->back()->withErrors(['error'=>'Password has been successfully changed']);
    }

    public function generatePDF()
    {
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('itsolutionstuff.pdf');
    }


}
