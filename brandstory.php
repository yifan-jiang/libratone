<?php 
	require_once("init.php");
	@$city = $_REQUEST["city"];
	if($city==null){
		$sql="SELECT * FROM stores";
	}else{
		$sql="SELECT * FROM stores WHERE city = '$city'";
	}
	$arr =  sql_execute($sql);
	$result = json_encode($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 	<title>Document</title>
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/basehead.css">
		<link rel="stylesheet" href="css/basefoot.css">
		<link rel="stylesheet" href="css/brandstory.css">
		<link rel="stylesheet" href="css/scroll.css">

</head>
<body>

<div id="toTop">
        
    </div>
		<div class="loadhead">

		</div>
		<div class="container">
			<div class="main">
				<div class="row">
					<div class="col-xs-12" style="margin-bottom: 50px;">
						<h1>品牌故事</h1>
					</div>
				</div>
				<div class="row"  style="margin-bottom:5px;">
					<div class=" col-xs-12 col-sm-8 twodiv">
						<a href=""><img src="images/1474250709406072610.jpg" alt=""></a>
					</div>
					<div class=" col-xs-12 col-sm-4 onediv">
						<img class="img-responsive" src="images/asdasdsadsadsadsadsad1.jpg" alt="">
						<a href="article.php?aid=1"><img  style="position: absolute;top:0;left:0" class="img-responsive topimg" src="images/1450830393068336225.png" alt=""></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4 onediv">
						<img class="img-responsive" src="images/as654d1as56d.jpg" alt="">
						<a href="article.php?aid=2"><img style="position: absolute;top:0;left:0" class="img-responsive topimg" src="images/1450830301547816848.png" alt=""></a>
					</div>
					<div class="col-xs-12 col-sm-8 twodiv">
						<a href=""><img class="img-responsive" src="images/1474251152331543846.jpg" alt=""></a>
					</div>
				</div>
			</div>
		</div>
		<div class="loadfoot">

		</div>
		<script src="js/jquery-1.11.3.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/loadhead.js"></script>
		<script src="js/scroll.js"></script>
		<script>
			


			(()=>{
				/***load页脚*/
				$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
			})();
		</script>
</body>
</html>
