<?php 
	header("Content-Type:application/json;charset=UTF-8");
	require_once("init.php");
	$sql="SELECT * FROM libratone_index_carousel";
	echo json_encode(sql_execute($sql));
 ?>