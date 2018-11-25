<?php

namespace App\Http\Controllers;

use App\Complain;
use App\Fari;
use App\Thana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class APIController extends Controller
{

	public function saveComplain(request $request)
	{
		// dd($request->all());
		$rules = [
			'phone' => 'required|max:14',
			'message' => 'required',
			'thana_id' => 'required_without:fari_id',
			'fari_id' => 'required_without:thana_id',
			'img' => 'nullable|file|image',
			'video' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/3gpp,video/avi',
			'audio' => 'nullable|file|mimetypes:audio/*',
		];
		$messages = [
			'phone.required' => 'Phone is required',
			'message.required' => 'Message is required',
			'thana_id.required_without' => 'The Thana is required when Fari is not present',
			'fari_id.required_without' => 'The Fari is required when Thana is not present'
		];
		$validator = Validator::make($request->all(), $rules, $messages);
		if ($validator->fails()) {
			return response()->json(['errors'=>$validator->errors()]);
		}

		$complain=new Complain;
		$complain->phone=$request->phone;
		$complain->message=$request->message;
		$complain->thana_id=$request->thana_id;
		$complain->fari_id=$request->fari_id;
                $complain->district_name=$request->district_name;
                $complain->lat=$request->lat;
                $complain->long=$request->long;
	

		

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

		return response()->json([
			'insert_id' => $complain->id ,
			'success' => 'Successfully saved',
		],100000);

		
	}
	public function allThana(){
		$thana=Thana::with('division','area','zone','district')->get();
		return response()->json(["thanafari"=>$thana]);
	}
	public function totalThana(){
		$totalThana=Thana::count();
		return response()->json(["total-thana"=>$totalThana]);
	}
	public function allFari(){
		$faris=Fari::with('division','area','zone','district','thana')->get();
		return response()->json($faris);
	}
	public function totalFari(){
		$totalFari=Fari::count();
		return response()->json(["total-fari"=>$totalFari]);
	}
	public function totalThanaFari(){
		$data=array();
		$data['totalThana']=Thana::count();
		$data['totalFari']=Fari::count();
		return response()->json($data);
	}
}
