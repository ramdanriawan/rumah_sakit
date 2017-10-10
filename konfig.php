<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "rumah_sakit";
        
    $base_url = "http://localhost/rumah_sakit/";
	$mysqli = mysqli_connect($server,$user,$pass);
	
	if ($mysqli){
		//echo ":)";
		mysqli_select_db($mysqli, $dbname) or die("database not found");
	}else{
		echo ":(";
	}
	 
?>