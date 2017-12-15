<?php 
	require_once("init.php");
	@$newsid = $_REQUEST["nid"];
	$sql="select n.title,n.subtitle,d.img,d.word from news n,news_detail d where newsid=$newsid AND n.nid=d.newsid ";
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
		<link rel="stylesheet" href="css/newdetail.css">


  <link rel="stylesheet" href="css/scroll.css">
</head>
<body>



<div id="toTop">
        
    </div>
		<div class="loadhead">

		</div>
		<div class="container">
			<div class="main">
				<h1></h1>
				<div class="row toptitle">
					<div class="col-xs-12">
						<p></p>
					</div>
				</div>
				<div class="row imgdiv">
				<!-- 	<div class="col-xs-12">
						<img src="" class="img-responsive" alt="">
						<p></p>
					</div> -->
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
				var data = <?php echo $result?>;
				var html="";
				for(p of data){
					html+=`
						<div class="col-xs-12">
							<img src="${p.img}" class="img-responsive" alt="">
							<p>${p.word}</p>
						</div>
					`;

				}
				$(".imgdiv").html(html);
				$("h1").html(data[0].title);
				$(".toptitle p").html(data[0].subtitle);
			})();




			(()=>{
				/***load页脚*/
				$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
			})();
		</script>
</body>
</html>
