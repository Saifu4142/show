<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passenger;
class passController extends Controller
{
	
	public function addPass(){
		
		return view('addPass');
	}
	
	
    
	public function showPassAdded(Request $req){
		
	
// $this->validate($req,[
// 'departure'=> 'required',
// 'arrival'=> 'required',
// 'dob'=> 'required'
// ]);
$pass= new Passenger;
$pass->name=$req->input('name');
$pass->email=$req->input('email');
$pass->password=$req->input('password');
$pass->contact=$req->input('contact');
$pass->gender=$req->input('gender');
$pass->address=$req->input('address');
// $pass->bus_id=$req->input('bus_id');
		return view('showPassAdded',['pass'=>$pass]);
	}
	
}
