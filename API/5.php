<?php 
	header("Allow-Access-Control-Origin: *");
	header("Content-Type: application/json; charset: UTF-8");
	header("Access-Control-Allow-Methods: POST");
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

		
	$sql = "SELECT * FROM person";
//	$sql = "SELECT * FROM person WHERE FirstName='Peter'";
	$result = mysqli_query($conn, $sql);
	$persons = array();

	if (mysqli_num_rows($result) > 0) {
		
		while($row = mysqli_fetch_assoc($result)) {
		   	$person = array(
			   	"FirstName" => $row["FirstName"],
			   	"LastName" => $row["LastName"],
			   	"Age" => $row["Age"]
		   	);
		   	array_push($persons, $person); 
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
	
	http_response_code(200);
	echo json_encode($persons);
?>
