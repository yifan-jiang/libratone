<?php 
	require_once("init.php");
	@$fid=$_REQUEST["fid"];
	$fid=1;
	$sql="SELECT * FROM earphones WHERE familyId='$fid'";
	$arr =  sql_execute($sql);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/basehead.css">
	<link rel="stylesheet" href="css/basefoot.css">
	<link rel="stylesheet" href="css/index.css">

 </head>
 <body>

 <!-- 	<input type="text" value="<?php echo $arr?>"> -->
 	<div class="loadhead">

 	</div>
 	<div class="loadfoot">

 	</div>
 	<script src="js/jquery-1.11.3.js"></script>
 	<script src="js/bootstrap.js"></script>
 	<script src="js/loadhead.js"></script>
 	<script>
 		
 	</script>
 </body>
 </html>