<?php 
	header("Allow-Access-Control-Origin: *");
	header("Content-Type: application/json; charset: UTF-8");
	header("Access-Control-Allow-Methods: POST");
		
	$conn = mysqli_connect("localhost", "root", "", "myDB");
	
	if(!conn) {
		die("connection failed: ". mysqli_connect_error());
	}
	
	$person = json_decode(file_get_contents("php://input"));
	$sql = "insert into person values ('$person->FirstName', '$person->LastName', '$person->Age')";
	$result = mysqli_query($conn, $sql);
	if($result) {
		echo "new record added successfully !!!!";
	} else {
		die("error: ". mysqli_error($conn));
	}
	mysqli_close($conn);
?>
