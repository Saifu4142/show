<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Way;
class wayController extends Controller
{
	
	public function addRoutes(){
	   
	   
	   return view('AddRoute');
   }
   
   public function addWays(Request $req){
	   
	 $this->validate($req,[
	'departure'=> 'required',
	'arrival'=> 'required',
	'dob'=> 'required'
	]);
	$ways= new Way;
	$ways->departure=$req->input('departure');
	$ways->arrival=$req->input('arrival');
	$ways->dob=$req->input('dob');
	
	
	return view('searchBus',['ways'=>$ways]);  
   }
}
