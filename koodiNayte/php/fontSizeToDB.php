<?php
require_once "connections.php";

if ($con) {
	
	mysqli_set_charset($con,"utf8");

	$fonttiSize = $_POST['fonttiSize'];
    $name1 = $_POST['nimi'];
	
	$errmsg = "";
	
    $query = mysqli_query($con, "SELECT * FROM naytonnimi WHERE nimi='$name1'");
    $numrows = mysqli_num_rows($query);  

    $query = "UPDATE naytonnimi
	SET koko = '$fonttiSize'
	WHERE nimi = '$name1'";	
	$query_run= mysqli_query($con,$query);
}

 else
		$errmsg = "Sorry, no database connection :(";
		echo $errmsg;

?>