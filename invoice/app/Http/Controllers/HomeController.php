<?php

namespace App\Http\Controllers;
use App\Models\customerinvoice;


use Illuminate\Http\Request;

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
    //public function index()
    //{
      //  return view('home');
    //}

    public function index()
    {
        $data=customerinvoice::all();
        return view('list',['customerinvoices'=>$data]);
    }

    public function login()
    {
        return view('/auth/login');
    }
}
