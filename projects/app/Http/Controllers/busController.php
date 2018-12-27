<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bus;
use App\Way;

class busController extends Controller
{
	
public function addBuses(){	


return view('addBus'); 
	
	}
    public function getDetails(Request $req){
	
// $this->validate($req,[
// 'departure'=> 'required',
// 'arrival'=> 'required',
// 'dob'=> 'required'
// ]);
$buses= new Bus;
$buses->bus_type=$req->input('bus_type');
$buses->status=$req->input('status');
$buses->total_seat=$req->input('total_seat');
$buses->seat_left=$req->input('seat_left');	
$buses->depart_time=$req->input('depart_time');	
$buses->arrival_time=$req->input('arrival_time');	
// $buses->route_id=$req->input('');	


	
return view('showBusAdded',['buses'=>$buses]); 	
		
	}
}
