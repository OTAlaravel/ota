<?php

namespace App\Http\Controllers;
use App\Hotels;
use App\Accommodations;
use App\Species;
use App\Inspirations;
use App\Experiences;
use App\HotelAccommodationRelation;
use App\HotelSpeciesRelation;
use App\HotelInspirationsRelation;
use App\HotelExperiencesRelation;
use App\HotelContact;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function hotels_list(){
    	$user = auth('web')->user();
    	$hotels = Hotels::where('user_id', '=', $user->id)->get();
    	return view('frontend.hotelier.listhotel', compact('hotels'));
    }

    public function hotels_edit($id){
    	$hotels = Hotels::where('id', '=' , $id)->get()->first();
    	$accommodations = Accommodations::all();
    	$species = Species::all();
    	$inspirations = Inspirations::all();
    	$experiences = Experiences::all();
    	$accommodation_relation = HotelAccommodationRelation::where('hotel_id', '=' , $id)->get();
    	$species_relation = HotelSpeciesRelation::where('hotel_id', '=' , $id)->get();
    	$inspirations_relation = HotelInspirationsRelation::where('hotel_id', '=' , $id)->get();
    	$experiences_relation = HotelExperiencesRelation::where('hotel_id', '=' , $id)->get();
    	$hotelcontact = HotelContact::where('hotel_id', '=' , $id)->get()->first();
    	return view('frontend.hotelier.edithotel', compact('hotels', 'accommodations', 'accommodation_relation', 'species', 'species_relation', 'inspirations', 'inspirations_relation', 'experiences', 'experiences_relation', 'hotelcontact'));
    } 

    public function hotels_update(Request $request, $id){
    	$this->validate($request, [
            'hotels_name' => 'required|string|max:255',
            'region_id' => 'required|integer',
            'country_id' => 'required|integer',
            'state_id' => 'required|integer',
            'town' => 'required|string|max:255',
            'email_id' => 'required|email',
            'contact_person_name' => 'required|string',
            'contact_person_email' => 'required|email',
        ]);
        $lang =  \App::getLocale(); 
        $hotels = Hotels::find($id);
        $hotels->locale = $lang;
        $hotels->hotels_name = $request->hotels_name;
        $hotels->hotels_desc = $request->hotels_desc;
        $hotels->enthusiast_services = $request->enthusiast_services;
        $hotels->distance_airport = $request->distance_airport;
        $hotels->transfers_mode = $request->transfers_mode;
        $hotels->services_amenities = $request->services_amenities;
        $hotels->region_id = $request->region_id;
        $hotels->country_id = $request->country_id;
        $hotels->state_id = $request->state_id;
        $hotels->town = $request->town;
        $hotels->activity_season = $request->activity_season;
        $hotels->email_id = $request->email_id;
        $hotels->nearest_airport = $request->nearest_airport;
        $hotels->additional_information = $request->additional_information;
        $hotels->save();
        //Accommodation relation
        $accommodation_relation = HotelAccommodationRelation::where('hotel_id', '=' , $id)->get()->toArray();
        $accommodation_ids = $request->accommodation_id;
        if(!empty($accommodation_relation)){
            for ($i=0; $i < count($accommodation_relation) ; $i++) { 
                HotelAccommodationRelation::where('hotel_id', '=', $id)->where('accommodation_id', '=', $accommodation_relation[$i]['accommodation_id'])->delete();
            }
        }
        
        if (!empty($accommodation_ids)) {
            for ($j=0; $j < count($accommodation_ids) ; $j++) { 
                $accommodation_relation = new HotelAccommodationRelation;
                $accommodation_relation->accommodation_id = $accommodation_ids[$j];
                $accommodation_relation->hotel_id = $id;
                $accommodation_relation->save();
            }
        }
        //Species
        $species_relation = HotelSpeciesRelation::where('hotel_id', '=' , $id)->get()->toArray();
        $species_ids = $request->species_id;
        if(!empty($species_relation)){
            for ($k=0; $k < count($species_relation) ; $k++) { 
                HotelSpeciesRelation::where('hotel_id', '=', $id)->where('species_id', '=', $species_relation[$k]['species_id'])->delete();
            }
        }

        if (!empty($species_ids)) {
            for ($l=0; $l < count($species_ids) ; $l++) { 
                $species_relation = new HotelSpeciesRelation;
                $species_relation->species_id = $species_ids[$l];
                $species_relation->hotel_id = $id;
                $species_relation->save();
            }
        }

        //Inspirations
        $inspirations_relation = HotelInspirationsRelation::where('hotel_id', '=' , $id)->get()->toArray();
        $inspirations_ids = $request->inspirations_id;
        if(!empty($inspirations_relation)){
            for ($m=0; $m < count($inspirations_relation) ; $m++) { 
                HotelInspirationsRelation::where('hotel_id', '=', $id)->where('inspirations_id', '=', $inspirations_relation[$m]['inspirations_id'])->delete();
            }
        }

        if (!empty($inspirations_ids)) {
            for ($n=0; $n < count($species_ids) ; $n++) { 
                $inspirations_relation = new HotelInspirationsRelation;
                $inspirations_relation->inspirations_id = $inspirations_ids[$n];
                $inspirations_relation->hotel_id = $id;
                $inspirations_relation->save();
            }
        }

        //Experiences
        $experiences_relation = HotelExperiencesRelation::where('hotel_id', '=' , $id)->get()->toArray();
        $experiences_ids = $request->experiences_id;
        if(!empty($experiences_relation)){
            for ($p=0; $p < count($experiences_relation) ; $p++) { 
                HotelExperiencesRelation::where('hotel_id', '=', $id)->where('experiences_id', '=', $experiences_relation[$p]['experiences_id'])->delete();
            }
        }

        if (!empty($experiences_ids)) {
            for ($q=0; $q < count($experiences_ids) ; $q++) { 
                $experiences_relation = new HotelExperiencesRelation;
                $experiences_relation->experiences_id = $experiences_ids[$q];
                $experiences_relation->hotel_id = $id;
                $experiences_relation->save();
            }
        }

        $hotel_contact = HotelContact::where('hotel_id', '=' , $id)->get()->first();

        $hotel_contact->website = $request->website;
        $hotel_contact->address = $request->address;
        $hotel_contact->contact_person_name = $request->contact_person_name;
        $hotel_contact->contact_person_email = $request->contact_person_email;
        $hotel_contact->contact_person_phone = $request->contact_person_phone;
        $hotel_contact->save();

        return redirect()->back()->with('message', 'Hotels updated successfully!');

    }

}
