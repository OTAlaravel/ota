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

 ?>
 