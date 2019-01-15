<?php

namespace App\Http\Controllers;
use App\Rooms;
use App\PriceMatrix;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
	public function rooms_list($id){
		$rooms = Rooms::where('hotel_id', '=', $id)->get();
		return view('frontend.hotelier.rooms', compact('id', 'rooms'));
	}

	public function rooms_add($id){
		return view('frontend.hotelier.addroom', compact('id'));
	}

	public function rooms_doadd(Request $request, $id){
    	//print_r($request->all());
    	/*echo count($request->date);
    	exit();*/
    	$this->validate($request, [
    		'type' => 'required',
    		'adult_capacity' => 'required|integer',
    		'child_capacity' => 'required|integer',
    		'regular_price' => 'required|regex:/^\d*(\.\d{2})?$/',
    	]);
    	$rooms = new Rooms;
    	$rooms->type = $request->type;
    	$rooms->hotel_id = $id;
    	$rooms->adult_capacity = $request->adult_capacity;
    	$rooms->child_capacity = $request->child_capacity;
    	$rooms->regular_price = $request->regular_price;
    	$rooms->save();
    	$room_id = $rooms->id;
    	$date = $request->date;
    	$price = $request->price;
    	if(!empty(array_filter($date))){
    		for ($i=0; $i < count($date) ; $i++) { 
    			$priceMatrix = new PriceMatrix;
    			$priceMatrix->date = date('Y-m-d', strtotime($date[$i]));
    			$priceMatrix->price = $price[$i];
    			$priceMatrix->room_id = $room_id;
    			$priceMatrix->save();
    		}
    	}
    	return redirect()->back()->with('message', 'Room Added successfully!');
    }
}
