<?php
	function langOption(){
		$data=Config::get('laravellocalization.supportedLocales');
		$lang = @\Session::get('language');
			foreach ($data as $key => $value) {
				$selected='';
				if($key==$lang){
					$selected='selected="selected"';
				}
				echo '<option value="'.$key.'" '.$selected.' >'.$value['name'].'</option>';
			}
	}
	function langlinkslist(){
		$data=Config::get('laravellocalization.supportedLocales');
			foreach ($data as $key => $value) {
				echo '<a href="">'.$value['name'].'</a>';
			}
	}
	function countryOption($id=''){
		$country = App\Countries::all();
		foreach ($country as $key => $value) {
			if(isset($id)){
				if($value->id == $id){
					$selected='selected="selected"';
			}else{
				$selected='';
			}
			}
			echo '<option value="'.$value->id.'" '.$selected.' >'.$value->countries_name.'</option>';
		}
	}
	function getStateID($string, $country_id){
		$data = App\StatesTranslation::where('states_name', '=' , $string)->get()->first();
		if(!empty($data)){
			$dataID = $data->states_id;
		}else{
			$state = new App\States;
			$state->states_name = $string;
			$state->countries_id = $country_id;
			$state->save();
			$dataID = $state->id;
		}
		return $dataID;
	}
	function getCountryID($string){
		$data = App\CountriesTranslation::where('countries_name', '=' , $string)->get()->first();
		if(!empty($data)){
			$dataID = $data->countries_id;
		}else{
			$country = new App\Countries;
			$country->countries_name = $string;
			$country->save();
			$dataID = $country->id;
		}
		return $dataID;
	}
	function getRegionID($string){
		$data = App\RegionsTranslation::where('regions_name', '=' , $string)->get()->first();
		if(!empty($data)){
			$dataID = $data->regions_id;
		}else{
			$region = new App\Regions;
			$region->regions_name = $string;
			$region->save();
			$dataID = $region->id;
		}
		return $dataID;
	}

	function getSpeciesID($string){
		$data = App\SpeciesTranslation::where('species_name', '=' , $string)->get()->first();
		if(!empty($data)){
			$dataID = $data->species_id;
		}else{
			$species = new App\Species;
			$species->species_name = $string;
			$species->save();
			$dataID = $species->id;
		}
		return $dataID;
	}

	function getAccomodationID($string){
		$data = App\AccommodationsTranslation::where('accommodations_name', '=' , $string)->get()->first();
		if(!empty($data)){
			$dataID = $data->accommodations_id;
			return $dataID;
		}
	}

	function getInspirationID($string){
		$data = App\InspirationsTranslation::where('inspirations_name', '=' , $string)->get()->first();
		if(!empty($data)){
			$dataID = $data->inspirations_id;
			return $dataID;
		}
	}

	function getExperiencesID($string){
		$data = App\ExperiencesTranslation::where('experiences_name', '=' , $string)->get()->first();
		if(!empty($data)){
			$dataID = $data->experiences_id;
			return $dataID;
		}
	}

	function speciesSave($string, $hotel_id){
		$speciesID = getSpeciesID($string);
        $hotelSpeciesRelation = new App\HotelSpeciesRelation;
        $hotelSpeciesRelation->hotel_id = $hotel_id;
        $hotelSpeciesRelation->species_id = $speciesID;
        $hotelSpeciesRelation->save();
	}

	function accommodationSave($string, $hotel_id){
		$accommodation_id = getAccomodationID($string);
        $hotelaccommodationRelation = new App\HotelAccommodationRelation;
        $hotelaccommodationRelation->hotel_id = $hotel_id;
        $hotelaccommodationRelation->accommodation_id = $accommodation_id;
        $hotelaccommodationRelation->save();
	}

	function inspirationSave($string, $hotel_id){
		$inspiration_id = getInspirationID($string);
        $hotelInspirationsRelation = new App\HotelInspirationsRelation;
        $hotelInspirationsRelation->hotel_id = $hotel_id;
        $hotelInspirationsRelation->inspirations_id = $inspiration_id;
        $hotelInspirationsRelation->save();
	}

	function experiencesSave($string, $hotel_id){
		$experiences_id = getExperiencesID($string);
        $HotelexperiencesRelation = new App\HotelExperiencesRelation;
        $HotelexperiencesRelation->hotel_id = $hotel_id;
        $HotelexperiencesRelation->experiences_id = $experiences_id;
        $HotelexperiencesRelation->save();
	}


    //create header nav from header_nav array constants
	function get_header_navigation($classes="", $id=""){
		$header_nav=Config::get('constants.header_nav');
		//var_dump($header_nav);
		
		$html='';
		if(!empty($header_nav)){
			$active_slug= Request::segment(1);
			$html .='<ul class="'.$classes.'" id="'.$id.'">';
				foreach ($header_nav as $key => $value) {
					$selected= ($active_slug==$key ? ' class="active"' : ' ');
					$html .='<li><a href="'.url($key).'" '.$selected.' >'.$value.'</a></li>';
				}
			$html .='</ul>';
		}
		return $html;
	}
    
    //check slug exist in header_nav constants
	function is_nav($slug){
		$header_nav=Config::get('constants.header_nav');
		if(array_key_exists($slug, $header_nav)){
			return true;
		}
	}

	function is_slug($slug){
		$active_slug= Request::segment('1');
	}

	function split_name($name) {
		$name = trim($name);
		$last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
		$first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
		return array($first_name, $last_name);

	}


	function createSlug($str, $delimiter = '-'){
    	$slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
    	return $slug;
	} 

	function hotelSlugExists($slug){
		$data = App\HotelsTranslation::where('hotels_slug', '=' , $slug)->get()->first();
		if(!empty($data)){
			return true;
		}else{
			return false;
		}
	}

	function emailExists($email){
		$data = App\User::where('email', '=' , $email)->get()->first();
		if(!empty($data)){
			return $data->id;
		}
	}

	function regionOption($id=''){
		$region = App\Regions::all();
		foreach ($region as $key => $value) {
			if(isset($id)){
				if($value->id == $id){
					$selected='selected="selected"';
			}else{
				$selected='';
			}
			}
			echo '<option value="'.$value->id.'" '.$selected.' >'.$value->regions_name.'</option>';
		}
	}

	function stateOption($id=''){
		$states = App\States::all();
		foreach ($states as $key => $value) {
			if(isset($id)){
				if($value->id == $id){
					$selected='selected="selected"';
			}else{
				$selected='';
			}
			}
			echo '<option value="'.$value->id.'" '.$selected.' >'.$value->states_name.'</option>';
		}
	}

?>