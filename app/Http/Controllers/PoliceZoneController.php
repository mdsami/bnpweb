<?php

namespace App\Http\Controllers;

use App\Area;
use App\Division;
use App\Zone;
use Illuminate\Http\Request;

class PoliceZoneController extends Controller
{
    public function index()
    {
        $zone = Zone::all();

        return view('page.zone.index', compact('zone'));
    }

    public function show(request $request)
    {
        $zone=Zone::find($request->zone);
        return view('page.zone.show',compact('zone'));
    }
    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
    	$division = Division::all();
    	$area = Area::all();
        return view('page.zone.create',compact('division','area'));
    }

    public function store(request $request)
    {
        $zone=new Zone;
        $zone->name=$request->name;
        $zone->address=$request->address;
        $zone->division_id=$request->division_id;
        $zone->area_id=$request->area_id;
        $zone->save();
        session(['success' => 'Successfully saved']);
        return redirect()->back();
    }

    public function edit(request $request)
    {
    	$division = Division::all();
    	$area = Area::all();
        $zone=Zone::find($request->zone);
        return view('page.zone.edit',compact('zone','division','area'));
    }

    public function update(request $request)
    {
        $zone=Zone::find($request->zone);
        $zone->name=$request->name;
        $zone->address=$request->address;
        $zone->division_id=$request->division_id;
        $zone->area_id=$request->area_id;
        $zone->save();
        return redirect()->route('zone.index');
    }

    public function destroy(request $request)
    {
        $zone=Zone::find($request->zone);
        $zone->delete();
        session(['success' => 'Successfully Deleted']);
        return redirect()->back();
    }
    public function zoneBasedDistrict(Request $request){
        $district= Zone::find($request->zone)->district;
        return $district;
    }
}
