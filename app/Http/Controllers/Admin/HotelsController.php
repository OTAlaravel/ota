<?php

namespace App\Http\Controllers\admin;
use App\Hotels;
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
        return view('admin.hotels.index');
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
                        $species_arr = array();
                        for ($i=0; $i < count($species) ; $i++) { 
                             $speciesID = getSpeciesID($species[$i]);
                             array_push($species_arr, $speciesID);

                        }
                        $hotel = new Hotels;
                        //Insert
                        $hotel->hotel_name = $hotel_name;
                        $hotel->hotel_desc = $hotel_desc;
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
                       /* for ($i=0; $i < count($species_arr) ; $i++) { 
                            
                        }*/
                        echo $hotel->id;

                    }
                }
                $row++;
            } while (($getData = fgetcsv($file, 0, ","))!== FALSE);
        }
        
        exit();

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
