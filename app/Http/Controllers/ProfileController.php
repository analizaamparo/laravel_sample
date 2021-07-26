<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index(){
    	$prof = Profile::Orderby('id', 'asc')->get();
    	return view('crud/index',[
    		'listofprofile' => $prof,
    	]);
    }
    public function create(){
    	return view('crud/create');
    }
    public function add(Request $request){
    	$profSave = new Profile();
    	$profSave->fname = $request->fullname;
    	$profSave->age = $request->age;
    	if($profSave->save()){
    		return view('crud/create',[
    			'message' => "Successfully Saved",
    		]);
    	}else{
    		return "Error";
    	}
    }
    public function edit(Request $request){
 
    	$prof = Profile::where('id', $request->id)->first();
    	return view('crud/edit',[
			'profile' => $prof,
		]);
    }
    public function update(Request $request){
    	$prof = Profile::where('id', $request->id)->first();
    	$prof->fname = $request->fullname;
    	$prof->age = $request->age;
    	if($prof->update()){
    		$prof = Profile::Orderby('id', 'asc')->get();
	    	return view('crud/index',[
	    		'listofprofile' => $prof,
	    		'message' => "Successfully Updated",
	    	]);
    	}else{
    		return "Error";
    	}
    }
    public function delete(Request $request){
 
    	$deleteprof = Profile::where('id', $request->id)->first();
    	if ($deleteprof->delete()) {
    		$prof = Profile::Orderby('id','asc')->get();
	    	return view('crud/index',[
	    		'listofprofile' => $prof,
	    		'message' => "Successfully Deleted",
	    	]);
    	}else{
    		return "Error";
    	}
    	
    }
}
