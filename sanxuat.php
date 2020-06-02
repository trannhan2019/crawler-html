<?php 
	//require "dbCon.php";
	require "simple_html_dom.php";
	$sba = file_get_html("http://songba.vn/Default.aspx?tabid=cd096e66-8ff2-4d31-a6cb-0450c7e2e9e6");
	echo $sba;
	// $tin = $sba->find("table tbody tr.GridItem:nth-child(2)");
	// foreach ($tin as $t) {
		
	// 	echo count($t);
	// }

	
 ?>