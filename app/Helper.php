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
?>