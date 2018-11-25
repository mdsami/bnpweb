<?php

namespace App\Http\Controllers;

use App\Complain;
use App\Fari;
use App\Thana;
use Illuminate\Http\Request;


class ComplainController extends Controller
{
    
    public function index()
    {
        $complain = Complain::all();

        return view('page.complain.index', compact('complain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
    	$thana = Thana::all();
    	$fari = Fari::all();
        return view('page.complain.create',compact('fari','thana'));
    }

    public function show(request $request)
    {
        $complain=Complain::find($request->complain);
        return view('page.complain.show',compact('complain'));
    }

    public function store(request $request)
    {
        $complain=new Complain;
        $complain->phone=$request->phone;
        $complain->message=$request->message;
        $complain->thana_id=$request->thana_id;
        $complain->fari_id=$request->fari_id;

        if($request->hasFile('img')||$request->hasFile('audio')||$request->hasFile('video'))
        {
            if($request->file('img'))
            {
                $file = $request->file('img');
                $destinationPath = 'images';
                $path=$file->store($destinationPath);
                $complain->img=$path;
            }
            if($request->file('audio'))
            {
                $file = $request->file('audio');
                $destinationPath = 'audios';
                $path=$file->store($destinationPath);
                $complain->audio=$path;
            }
            if($request->file('video'))
            {
                $file = $request->file('video');
                $destinationPath = 'videos';
                $path=$file->store($destinationPath);
                $complain->video=$path;
            }
        }
        $complain->save();
        session(['success' => 'Successfully saved']);
        return redirect()->back();
    }

    public function edit(request $request)
    {
    	$thana= Thana::all();
    	$fari = Fari::all();
        $complain=Complain::find($request->complain);
        return view('page.complain.edit',compact('thana','fari','complain'));
    }

    public function update(request $request)
    {
        $complain=Complain::find($request->complain);
        $complain->phone=$request->phone;
        $complain->message=$request->message;
        $complain->thana_id=$request->thana_id;
        $complain->fari_id=$request->fari_id;
        $complain->save();
        return redirect()->route('complain.index');
    }

    public function destroy(request $request)
    {
        $complain=Complain::find($request->complain);
        $complain->delete();
        session(['success' => 'Successfully Deleted']);
        return redirect()->back();
    }

    public function complainBasedThana(){
        $thanaComplain= Complain::where('fari_id',NULL)->get();
         return view('page.complain.thana', compact('thanaComplain'));
    }
    public function complainBasedFari(){
        $fariComplain= Complain::where('thana_id',NULL)->get();
         return view('page.complain.fari', compact('fariComplain'));
    }
}
