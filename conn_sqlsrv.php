<?php
$serverName = "PHUONGNHAN\TRANNHAN"; 

$connectionInfo = array( "Database"=>"StudentDB", "UID"=>"sa", "PWD"=>"123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>