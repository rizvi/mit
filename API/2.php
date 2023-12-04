<?php 
	header("Allow-Access-Control-Origin: *");
	header("Content-Type: application/json; charset: UTF-8");
	
	$products = array();
	$product = array(
		"name" => "orange",
		"price" => 100,
		"quantity" => 2
	);
	
	array_push($products, $product);
	array_push($products, $product);
	array_push($products, $product);
	
	
	Http_response_code(200);
	echo json_encode($products);
?>
