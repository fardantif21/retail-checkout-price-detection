<?php 
	$db_host= 'localhost';
	$db_name= 'data';
	$db_user= "root";
	$db_password= "";

	try{
		$db= new PDO("mysql:host=$db_host;dbname=$db_name",$db_user, $db_password);
		//Setting Error Mode as Exception
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	} catch(PDOException $e){
		echo $e->getMessage();
	}
 ?>