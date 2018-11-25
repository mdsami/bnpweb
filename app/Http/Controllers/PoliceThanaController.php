<?php

namespace App\Http\Controllers;

use App\Area;
use App\District;
use App\Division;
use App\Thana;
use App\Zone;
use Illuminate\Http\Request;

class PoliceThanaController extends Controller
{
        public function all(){
        return Thana::all();
    }
    
    public function index()
    {
        $thana = $this->all();

        return view('page.thana.index', compact('thana'));
    }

    public function show(request $request)
    {
        $thana=Thana::find($request->thana);
        return view('page.thana.show',compact('thana'));
    }


    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
    	$division = Division::all();
    	$area = Area::all();
    	$zone = Zone::all();
    	$district = District::all();
        return view('page.thana.create',compact('division','area','zone','district'));
    }

    public function store(request $request)
    {
        $thana=new Thana;
        $thana->name=$request->name;
        $thana->address=$request->address;
        $thana->phone=$request->phone;
        $thana->long=$request->long;
        $thana->lat=$request->lat;
        $thana->oc=$request->oc;
        $thana->division_id=$request->division_id;
        $thana->area_id=$request->area_id;
        $thana->zone_id=$request->zone_id;
        $thana->district_id=$request->district_id;
        $thana->save();
        session(['success' => 'Successfully saved']);
        return redirect()->back();
    }

    public function edit(request $request)
    {
    	$division = Division::all();
        $area = Area::all();
    	$zone = Zone::all();
    	$district = District::all();
        $thana=Thana::find($request->thana);
        return view('page.thana.edit',compact('thana','division','area','zone','district'));
    }

    public function update(request $request)
    {
        $thana=Thana::find($request->thana);
        $thana->name=$request->name;
        $thana->address=$request->address;
        $thana->phone=$request->phone;
        $thana->long=$request->long;
        $thana->lat=$request->lat;
        $thana->oc=$request->oc;
        $thana->division_id=$request->division_id;
        $thana->area_id=$request->area_id;
        $thana->zone_id=$request->zone_id;
        $thana->district_id=$request->district_id;
        $thana->save();
        return redirect()->route('thana.index');
    }

    public function destroy(request $request)
    {
        $thana=Thana::find($request->thana);
        $thana->delete();
        session(['success' => 'Successfully Deleted']);
        return redirect()->back();
    }
}
