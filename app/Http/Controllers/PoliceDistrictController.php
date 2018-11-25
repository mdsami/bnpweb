<?php

namespace App\Http\Controllers;

use App\Area;
use App\Division;
use App\Zone;
use App\District;
use Illuminate\Http\Request;

class PoliceDistrictController extends Controller
{
    public function all(){
        return District::all();
    }
    
    public function index()
    {
        $district = $this->all();

        return view('page.district.index', compact('district'));
    }

        public function show(request $request)
    {
        $district=District::find($request->district);
        return view('page.district.show',compact('district'));
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
        return view('page.district.create',compact('division','area','zone'));
    }

    public function store(request $request)
    {
        $district=new district;
        $district->name=$request->name;
        $district->address=$request->address;
        $district->division_id=$request->division_id;
        $district->area_id=$request->area_id;
        $district->zone_id=$request->zone_id;
        $district->save();
        session(['success' => 'Successfully saved']);
        return redirect()->back();
    }

    public function edit(request $request)
    {
    	$division = Division::all();
        $area = Area::all();
    	$zone = Zone::all();
        $district=District::find($request->district);
        return view('page.district.edit',compact('district','division','area','zone'));
    }

    public function update(request $request)
    {
        $district=district::find($request->district);
        $district->name=$request->name;
        $district->address=$request->address;
        $district->division_id=$request->division_id;
        $district->area_id=$request->area_id;
        $district->save();
        return redirect()->route('district.index');
    }

    public function destroy(request $request)
    {
        $district=district::find($request->district);
        $district->delete();
        session(['success' => 'Successfully Deleted']);
        return redirect()->back();
    }

    public function districtBasedThana(Request $request){
        $thana= District::find($request->district)->thana;
        return $thana;
    }
}
