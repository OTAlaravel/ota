<?php

namespace App\Http\Controllers\admin;
use App\Hotels;
use App\HotelSpeciesRelation;
use App\HotelAccommodationRelation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin'); 
    }

    public function index()
    {  
        $hotels = Hotels::all();
        return view('admin.hotels.index', compact('hotels'));
    }

    public function uploadcsv(Request $request){
        $this->validate($request,[
            'upload_csv' => 'required|mimes:csv,txt',

        ]);
        if($request->file('upload_csv')){
            $path = $request->file('upload_csv')->getRealPath();
            $file = fopen($path, "r");
            $getData = fgetcsv($file, 0, ",");
            $row = 0;
            do { 
                if($row > 1){
                    if(!empty(array_filter($getData))){
                        $region_id = getRegionID($getData[0]);
                        $country_id = getCountryID($getData[1]);
                        $state_id = getStateID($getData[2], $country_id);
                        $town = $getData[3];
                        $hotel_name = $getData[4];
                        $rating = $getData[5];
                        if($getData[6] == 1){
                           $contact_status = 'R';
                        }else{
                           $contact_status = 'D';
                        }
                        /*$contact_status = $getData[7];*/
                        $image_code = $getData[8];
                        $email_id = $getData[9];
                        $nearest_airport = $getData[10];
                        $distance_airport = $getData[11];
                        $transfers_mode = $getData[12];
                        $additional_information = $getData[13];
                        $services_amenities = $getData[14];
                        $hotel_desc = $getData[15];
                        $enthusiast_services = $getData[16];
                        $activity_season = $getData[17];
                        $species = explode(",", $getData[18]);
                        $hotel = new Hotels;
                        //=======Insert hotel=====
                        $lang =  \App::getLocale(); 
                        $hotel->locale = $lang;
                        $hotel->hotels_name = $hotel_name;
                        $hotel->hotels_desc = $hotel_desc;
                        $hotel->region_id = $region_id;
                        $hotel->country_id = $country_id;
                        $hotel->state_id = $state_id;
                        $hotel->town = $town;
                        $hotel->email_id = $email_id;
                        $hotel->nearest_airport = $nearest_airport;
                        $hotel->distance_airport = $distance_airport;
                        $hotel->transfers_mode = $transfers_mode;
                        $hotel->additional_information = $additional_information;
                        $hotel->services_amenities = $services_amenities;
                        $hotel->enthusiast_services = $enthusiast_services;
                        $hotel->activity_season = $activity_season;
                        $hotel->image_code = $image_code;
                        $hotel->contact_status = $contact_status;
                        $hotel->rating = $rating;
                        $hotel->save();
                        $hotel_id = $hotel->id;
                        
                        //=====species data insert=====
                        for ($i=0; $i < count($species) ; $i++) { 
                            $hotelSpeciesRelation = new HotelSpeciesRelation;
                            $speciesID = getSpeciesID($species[$i]);
                            $hotelSpeciesRelation->hotel_id = $hotel_id;
                            $hotelSpeciesRelation->species_id = $speciesID;
                            $hotelSpeciesRelation->save();
                        }
                        //=====accommodation data insert=====
                        $acc_type_arr = array('TYPE A', 'TYPE B', 'TYPE C', 'TYPE D', 'TYPE E', 'TYPE F');
                        $type_1 = $getData[19];
                        $type_2 = $getData[20];
                        $type_3 = $getData[21];
                        $type_4 = $getData[22];
                        $type_5 = $getData[23];
                        $type_6 = $getData[24];
                        if($type_1 == 1){
                            $accommodation_id = getAccomodationID($acc_type_arr[0]);
                            $hotelaccommodationRelation = new HotelAccommodationRelation;
                            $hotelaccommodationRelation->hotel_id = $hotel_id;
                            $hotelaccommodationRelation->accommodation_id = $accommodation_id;
                            $hotelaccommodationRelation->save();
                        }
                        if($type_2 == 1){
                            $accommodation_id = getAccomodationID($acc_type_arr[1]);
                            $hotelaccommodationRelation = new HotelAccommodationRelation;
                            $hotelaccommodationRelation->hotel_id = $hotel_id;
                            $hotelaccommodationRelation->accommodation_id = $accommodation_id;
                            $hotelaccommodationRelation->save();
                        }
                        if($type_3 == 1){
                            $accommodation_id = getAccomodationID($acc_type_arr[2]);
                            $hotelaccommodationRelation = new HotelAccommodationRelation;
                            $hotelaccommodationRelation->hotel_id = $hotel_id;
                            $hotelaccommodationRelation->accommodation_id = $accommodation_id;
                            $hotelaccommodationRelation->save();
                        }
                        if($type_4 == 1){
                            $accommodation_id = getAccomodationID($acc_type_arr[3]);
                            $hotelaccommodationRelation = new HotelAccommodationRelation;
                            $hotelaccommodationRelation->hotel_id = $hotel_id;
                            $hotelaccommodationRelation->accommodation_id = $accommodation_id;
                            $hotelaccommodationRelation->save();
                        }
                        if($type_5 == 1){
                            $accommodation_id = getAccomodationID($acc_type_arr[4]);
                            $hotelaccommodationRelation = new HotelAccommodationRelation;
                            $hotelaccommodationRelation->hotel_id = $hotel_id;
                            $hotelaccommodationRelation->accommodation_id = $accommodation_id;
                            $hotelaccommodationRelation->save();
                        }
                        if($type_6 == 1){
                            $accommodation_id = getAccomodationID($acc_type_arr[5]);
                            $hotelaccommodationRelation = new HotelAccommodationRelation;
                            $hotelaccommodationRelation->hotel_id = $hotel_id;
                            $hotelaccommodationRelation->accommodation_id = $accommodation_id;
                            $hotelaccommodationRelation->save();
                        }

                    }
                }
                $row++;
            } while (($getData = fgetcsv($file, 0, ","))!== FALSE);
        }
        return redirect()->back()->with('message', 'Hotels added successfully!');

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
