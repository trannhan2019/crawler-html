<?php
$serverName = "VANTHU\SQLEXPRESS01"; 

$connectionInfo = array( "Database"=>"ASPNETVN.PORTAL.SONGBA", "UID"=>"sa", "PWD"=>"123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>