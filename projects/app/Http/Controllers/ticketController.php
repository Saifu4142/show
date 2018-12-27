<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class ticketController extends Controller
{
    public function showTicketAdded(Request $req){
			// $this->validate($req,[
// 'departure'=> 'required',
// 'arrival'=> 'required',
// 'dob'=> 'required'
// ]);

		$ticket= new Ticket;
$ticket->ticket_type=$req->input('ticket_type');
$ticket->ticket_price=$req->input('ticket_price');
		return view('showTicketAdded',['ticket'=>$ticket]);
	}
	public function addTicket()
	{	
	return view('addTicket');
	}

		
	
}
