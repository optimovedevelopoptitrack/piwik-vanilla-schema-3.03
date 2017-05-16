<?php

	function checkHealth(){
		
		$full_url = 'http://localhost/index.php';        
		$curl_handle = curl_init();
		curl_setopt( $curl_handle, CURLOPT_URL, $full_url );
		curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true ); // Fetch the contents too
		curl_setopt( $curl_handle, CURLOPT_CONNECTTIMEOUT, 2 ); // 2 second timeout
		if( ! $html = curl_exec( $curl_handle ) ) // Execute the request
		{
			print_r('failed');
			http_response_code(400);
			 
		}else{
			print_r('suceeded');
			 http_response_code(200);
		}
		curl_close( $curl_handle );
				
	}
		
       
	checkHealth();

?>