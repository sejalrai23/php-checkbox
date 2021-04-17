<?php 

	$db = new mysqli('localhost','root','','mybooking');
	// $db = new mysqli('localhost','username','password','database name');

	If($db->connect_error)
	{ 
		echo 'not success';
	}
	else{ 
		echo 'success';
	}

 ?>