<?php 
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	$product = array(
		"name" => "orange",
		"price"=> 100,
		"quantity" => 2
	);

	http_response_code(200);
	echo json_encode($product);
?>
