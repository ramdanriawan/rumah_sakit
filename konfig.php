<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "rumah_sakit";
        
    $base_url = "http://localhost/rumah_sakit/";
	
	if (mysqli_connect($server,$user,$pass)){
		//echo ":)";
		mysqli_select_db(mysqli_connect($server,$user,$pass), $dbname) or die("database not found");
	}else{
		echo ":(";
	}
	 
?>