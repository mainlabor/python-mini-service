<?php

	$json = file_get_contents('http://production-service');
	$obj = json_decode($json);
	$products = $obj->products:
	foreach($products as $product){
		echo "<li>$product</li>";
	}

?>
