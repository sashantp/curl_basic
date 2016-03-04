<?php
require 'curl_basic.php';

$url = "https://www.exapayments.com/process_payment/";

$data = array(
'order_no'			=>'100000172',
'TIMESTAMP' 		=>'20160210140429',
'HASH' 				=>'43c361c36a48941aa2731c4b9bb546b0',
'api_key' 			=>'c9c080e0e4827597d9f407bbc6f17a2b',
'amount' 			=>'20',
'return_url' 		=>'http://testeaglespayments.exanano1.com/index.php/exapay/payment/response?',
'callback_url'   	=>'http://testeaglespayments.exanano1.com/index.php/exapay/payment/response?callback=true',
'return_url_target'	=>'parent',
'return_url_text'	=>'Continue',
'cancel_url'		=>'http://testeaglespayments.exanano1.com/index.php/exapay/payment/cancel',
'billing_country'	=>'AU',
'delivery_country'	=>'AU',
'email_address' 	=>'sashant.pardeshi@exateam.com',
'first_name'		=>'Test',
'last_name'			=>'User',
'meta' 				=>'cart_name_eq_Default Store View|cart_post_method_eq_Free Shipping - Free|cart_billing_address_eq_Test User, , Toorak Road Camberwell Melbourne, VIC 3124 AU|cart_delivery_address_eq_Test User, , Toorak Road Camberwell Melbourne, VIC 3124 AU'
);

try{
//	while (true){
		curl_hit($url,$data,true);	
//	}
}catch(Exception $e){
	print $e->getMessage();
}

?>
