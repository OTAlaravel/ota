<?php

namespace App\Http\Controllers\admin;
use App\Hotels;
use App\HotelSpeciesRelation;
use App\HotelAccommodationRelation;
use App\HotelExperiencesRelation;
use App\HotelContact;
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
                        /*for ($i=0; $i < count($species) ; $i++) { 
                            $hotelSpeciesRelation = new HotelSpeciesRelation;
                            $speciesID = getSpeciesID($species[$i]);
                            $hotelSpeciesRelation->hotel_id = $hotel_id;
                            $hotelSpeciesRelation->species_id = $speciesID;
                            $hotelSpeciesRelation->save();
                        }*/
                        //=====accommodation data insert=====
                        $acc_type_arr = array('TYPE A', 'TYPE B', 'TYPE C', 'TYPE D', 'TYPE E', 'TYPE F');
                        if(!empty($acc_type_arr)){
                            $type_1 = $getData[19];
                            $type_2 = $getData[20];
                            $type_3 = $getData[21];
                            $type_4 = $getData[22];
                            $type_5 = $getData[23];
                            $type_6 = $getData[24];
                            for ($i=0; $i < count($acc_type_arr) ; $i++) { 
                                $var_type = ${ 'type_' .($i+1)};
                                if($var_type == 1){
                                    accommodationSave($acc_type_arr[$i], $hotel_id);
                                }
                            }
                        }
                        //======Inspiration data insert======
                        $insp_type_arr  = array();
                            if(!empty($insp_type_arr)){
                            $insp_type_1 = $getData[25];
                            $insp_type_2 = $getData[26];
                            $insp_type_3 = $getData[27];
                            $insp_type_4 = $getData[28];
                            $insp_type_5 = $getData[29];
                            $insp_type_6 = $getData[30];
                            $insp_type_7 = $getData[31];
                            $insp_type_8 = $getData[32];
                            for ($i=0; $i < count($insp_type_arr) ; $i++) { 
                                $var_type = ${ 'insp_type_' .($i+1)};
                                if($var_type == 1){
                                    inspirationSave($insp_type_arr[$i], $hotel_id);
                                }
                            }
                        }

                        //======Experinces data insert======
                        $exp_type_arr  = array();
                            if(!empty($exp_type_arr)){
                            $exp_type_1 = $getData[33];
                            $exp_type_2 = $getData[34];
                            $exp_type_3 = $getData[35];
                            $exp_type_4 = $getData[36];
                            $exp_type_5 = $getData[37];
                            $exp_type_6 = $getData[38];
                            $exp_type_7 = $getData[39];
                            $exp_type_8 = $getData[40];
                            for ($i=0; $i < count($exp_type_arr) ; $i++) { 
                                $var_type = ${ 'exp_type_' .($i+1)};
                                if($var_type == 1){
                                    experiencesSave($exp_type_arr[$i], $hotel_id);
                                }
                            }
                        }
                        //Species data insert
                        $spec_type_arr = array();
                        if(!empty($spec_type_arr)){
                            $spec_type_1 = $getData[41];
                            $spec_type_2 = $getData[42];
                            $spec_type_3 = $getData[43];
                            $spec_type_4 = $getData[44];
                            $spec_type_5 = $getData[45];
                            $spec_type_6 = $getData[46];
                            $spec_type_7 = $getData[47];
                            $spec_type_8 = $getData[48];
                            $spec_type_9 = $getData[49];
                            $spec_type_10 = $getData[50];
                            $spec_type_11 = $getData[51];
                            $spec_type_12 = $getData[52];
                            $spec_type_13 = $getData[53];
                            $spec_type_14 = $getData[54];
                            $spec_type_15 = $getData[55];
                            $spec_type_16 = $getData[56];
                            $spec_type_17 = $getData[57];
                            $spec_type_18 = $getData[58];
                            $spec_type_19 = $getData[59];
                            $spec_type_20 = $getData[60];
                            $spec_type_21 = $getData[61];
                            $spec_type_22 = $getData[62];
                            $spec_type_23 = $getData[63];
                            $spec_type_24 = $getData[64];
                            $spec_type_25 = $getData[65];
                            for ($i=0; $i < count($spec_type_arr) ; $i++) { 
                                $var_type = ${ 'spec_type_' .($i+1)};
                                if ($var_type == 1) {
                                    speciesSave($spec_type_arr[$i], $hotel_id);
                                }
                            }
                        }
                        //======hotel contact details=====
                        $website = $getData[69];
                        $address = $getData[70];
                        $contact_person_name = $getData[71];
                        $contact_person_email = $getData[72];
                        $contact_person_phone = $getData[73];
                        $HotelContact = new HotelContact;
                        $HotelContact->website = $website;
                        $HotelContact->address = $address;
                        $HotelContact->contact_person_name = $contact_person_name;
                        $HotelContact->contact_person_email = $contact_person_email;
                        $HotelContact->contact_person_phone = $contact_person_phone;
                        $HotelContact->save();

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
        
    }
}
