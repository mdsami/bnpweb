<?php


namespace App\Http\Controllers;

use App\Complain;
use App\Fari;
use App\Thana;
use App\District;
use Illuminate\Http\Request;




class DashboardController extends Controller
{


    /**
     * Create Auth Constructer so without Auth no entry.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total=array();
        $total['complain']=Complain::count();
        $total['district']=Thana::count();
        $total['thana']=Thana::count();
        $total['fari']=Fari::count();
        $complain=Complain::all();
        return view('page.home',compact('total','complain'));
    }



    public function test()
    {
        return view('page.test');
    }

}
