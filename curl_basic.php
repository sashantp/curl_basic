<?php 

/*
function to curl get / post url
throws Exception if url is missing - please pass url parameter.
*/
function curl_hit( $url = "" , $data = array(), $type = true ){

	if( isset( $url ) && $url != "" ){
		
		try{
			
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_URL, $url);

			curl_setopt($ch, CURLOPT_POST, $type);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

			echo curl_exec($ch);

			curl_close($ch);

		}catch(Exception $e){
			throw new Exception($e->getMessage());
		}		
	}else{
		throw new Exception('please pass url parameter');
	}
	
}

?>
