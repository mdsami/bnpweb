<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class PoliceDivisionController extends Controller
{
    //

    /**
     * Create Auth Constructer so without Auth no entry.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function all(){
        return Division::all();
    }
    
    public function index()
    {
        $division = $this->all();

        return view('page.division.index', compact('division'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function show(request $request)
    {

        $division=Division::find($request->division);
        return view('page.division.show',compact('division'));
    }

    public function create()
    {
        return view('page.division.create');
    }

    public function store(request $request)
    {
        $division=new Division;
        $division->name=$request->name;
        $division->save();
        session(['success' => 'Successfully saved']);
        return redirect()->back();
    }

    public function edit(request $request)
    {
        $division=Division::find($request->division);
        return view('page.division.edit',compact('division'));
    }

    public function update(request $request)
    {
        $division=Division::find($request->division);
        $division->name=$request->name;
        $division->save();
        return redirect()->route('division.index');
    }

    public function destroy(request $request)
    {
        $division=Division::find($request->division);
        $division->delete();
        session(['success' => 'Successfully Deleted']);
        return redirect()->back();
    }

    public function divisionBasedArea(Request $request){
        $area= Division::find($request->division)->area;
        return $area;
    }
}
