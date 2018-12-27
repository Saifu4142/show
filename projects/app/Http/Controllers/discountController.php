<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Discount;

class discountController extends Controller
{
    public function showdiscount(Request $req){
	
	
    $discount=new Discount;
$discount->discounted_price=$req->input('discounted_price');
	return view('showdiscount',['discount'=>$discount]);
} 
public function adddiscount(){
	
	return view('adddiscount');
}
}
