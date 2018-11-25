<?php

namespace App\Http\Controllers;

use App\Area;
use App\District;
use App\Division;
use App\Fari;
use App\Thana;
use App\Zone;
use Illuminate\Http\Request;

class PoliceFariController extends Controller
{
    public function all(){
        return Fari::all();
    }

    public function index()
    {
        $fari = $this->all();

        return view('page.fari.index', compact('fari'));
    }

    public function show(request $request)
    {
        $fari=Fari::find($request->fari);
        return view('page.fari.edit',compact('fari'));
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
        $thana = Thana::all();
        return view('page.fari.create',compact('division','area','zone','district','thana'));
    }

    public function store(request $request)
    {
        $fari=new fari;
        $fari->name=$request->name;
        $fari->address=$request->address;
        $fari->phone=$request->phone;
        $fari->long=$request->long;
        $fari->lat=$request->lat;
        $fari->oc=$request->oc;
        $fari->division_id=$request->division_id;
        $fari->area_id=$request->area_id;
        $fari->zone_id=$request->zone_id;
        $fari->district_id=$request->district_id;
        $fari->thana_id=$request->thana_id;
        $fari->save();
        session(['success' => 'Successfully saved']);
        return redirect()->back();
    }

    public function edit(request $request)
    {
        $division = Division::all();
        $area = Area::all();
        $zone = Zone::all();
        $district = District::all();
        $thana = Thana::all();
        $fari=Fari::find($request->fari);
        return view('page.fari.edit',compact('fari','division','area','zone','district','thana'));
    }

    public function update(request $request)
    {
        $fari=Fari::find($request->fari);
        $fari->name=$request->name;
        $fari->address=$request->address;
        $fari->phone=$request->phone;
        $fari->long=$request->long;
        $fari->lat=$request->lat;
        $fari->oc=$request->oc;
        $fari->division_id=$request->division_id;
        $fari->area_id=$request->area_id;
        $fari->zone_id=$request->zone_id;
        $fari->district_id=$request->district_id;
        $fari->thana_id=$request->thana_id;
        $fari->save();
        return redirect()->route('fari.index');
    }

    public function destroy(request $request)
    {
        $fari=Fari::find($request->fari);
        $fari->delete();
        session(['success' => 'Successfully Deleted']);
        return redirect()->back();
    }

}
