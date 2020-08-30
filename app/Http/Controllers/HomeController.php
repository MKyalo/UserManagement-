<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countProducts=count(DB::select('SELECT * FROM products'));
        $countSuppliers=count(DB::select('SELECT * FROM suppliers'));
        $countUsers=count(DB::select('SELECT * FROM users'));
        $data=array('countProducts'=>$countProducts,'countSuppliers'=>$countSuppliers,'countUsers'=>$countUsers);
        if(Auth::user()->role === "User")
        {
            return view('users.new');
        }
        else
        {
            return view('dashboard')->with($data);
        }
        
    }
}
