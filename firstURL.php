<?php


// this is specific to only one category
function getFirstURL($token) {
	$url ='https://affiliate-api.flipkart.net/affiliate/api/'.$token.'.json';
	$ch = curl_init($url);

   // Option to Return the Result, rather than just true/false
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


  // Perform the request, and save content to $result
	$result = curl_exec($ch);

	$data = json_decode($result,true);


	//print_r($result);
   $variant = $data['apiGroups']['affiliate']['apiListings']['televisions']['availableVariants'];

	return $variant['v0.1.0']['get'];

}

?>