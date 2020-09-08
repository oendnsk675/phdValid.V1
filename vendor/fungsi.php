<?php  


function tulis($tipe = null, $data = null, $path){
	if ($tipe == "copret") {
		$namaFile = $path;
		$file = fopen($namaFile, "a");
		fwrite($file, "================Tool EastLombok===============\n=====created by: sayidina ahmadal qoqosyi=====\n\n");
		fclose($file);
	}else{
		$namaFile = $path;
		$file = fopen($namaFile, "a");
		fwrite($file, "$data\n");
		fclose($file);
	}
}





?>