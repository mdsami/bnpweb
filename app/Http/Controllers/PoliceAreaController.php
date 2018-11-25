<?php

namespace App\Http\Controllers;

use App\Division;
use App\Area;
use Illuminate\Http\Request;

class PoliceareaController extends Controller
{
    public function all(){
        return Area::all();
    }
    
    public function index()
    {
        $area = $this->all();

        return view('page.area.index', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
    	$division = Division::all();
        return view('page.area.create',compact('division'));
    }

    public function show(request $request)
    {
        $area=Area::find($request->area);
        return view('page.area.show',compact('area','division'));
    }

    public function store(request $request)
    {
        $area=new Area;
        $area->name=$request->name;
        $area->address=$request->address;
        $area->division_id=$request->division_id;
        $area->save();
        session(['success' => 'Successfully saved']);
        return redirect()->back();
    }

    public function edit(request $request)
    {
    	$division = Division::all();
        $area=Area::find($request->area);
        return view('page.area.edit',compact('area','division'));
    }

    public function update(request $request)
    {
        $area=Area::find($request->area);
        $area->name=$request->name;
        $area->address=$request->address;
        $area->division_id=$request->division_id;
        $area->save();
        return redirect()->route('area.index');
    }

    public function destroy(request $request)
    {
        $area=Area::find($request->area);
        $area->delete();
        session(['success' => 'Successfully Deleted']);
        return redirect()->back();
    }

    public function areaBasedZone(Request $request){
        $zone= Area::find($request->area)->zone;
        return $zone;
    }
}
