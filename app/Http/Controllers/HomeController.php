<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendMail;
use Illuminate\Support\Facades\Auth;
// use PDF;
use Barryvdh\DomPDF\Facade as PDF;
use App\Product;


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

        return view('myPDF');
        // $data = ['title' => 'Welcome to Egermatt.com'];

        // $products=Product::where('user_id',Auth::id())->get();
        // $pdf = PDF::loadView('myPDF', ['user'=>Auth::user(),'products'=>$products]);
  
        // return $pdf->download('Egermatt.pdf');
    }

    public function printReports(){
        return view('reports');
    }

}
