<?php 
require 'curl_basic.php';

$start_url = "http://exaautomation.exanano1.com/curl-hit/4aa36dcf16b08b4fa33e7dfffee93d67/start";

$end_url   = "http://exaautomation.exanano1.com/curl-hit/4aa36dcf16b08b4fa33e7dfffee93d67/end";

try{
	$log_file_handle = fopen('temp.csv','a+');
	$temp = array( 'start', 'test' );
	fputcsv( $log_file_handle, $temp );

	// file_get_contents( $start_url );
	// fputcsv($log_file_handle, array( 'start', date('Y-m-d-H-i-s') ) );

	// //sleep(5);

	// file_get_contents( $end_url );
	// fputcsv($log_file_handle, array( 'end', date('Y-m-d-H-i-s') ) );

	fclose($log_file_handle);
}catch(Exception $e){
	print $e->getMessage();
	fputcsv($log_file_handle, array( 'error', (string)$e->getMessage() ) );
}




?>