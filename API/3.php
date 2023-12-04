<?php 
	header("Allow-Access-Control-Origin: *");
	header("Content-Type: application/json; charset: UTF-8");
	header("Access-Control-Allow-Methods: POST");
	
	$product = json_decode(file_get_contents("php://input"));
	echo $product->name;
	
	//http_response_code(200);
	//echo json_encode($product);
?>
