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

 ?>
 