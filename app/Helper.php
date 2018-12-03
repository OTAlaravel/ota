<?php
function langOption(){
 		$data=Config::get('laravellocalization.supportedLocales');
	 		foreach ($data as $key => $value) {
	 			echo '<option value="'.$key.'">'.$value['name'].'</option>';
	 		}
 	}


 	function langlinkslist(){
 		$data=Config::get('laravellocalization.supportedLocales');
	 		foreach ($data as $key => $value) {
	 			echo '<a href="">'.$value['name'].'</a>';
	 		}
 	}

 ?>
 