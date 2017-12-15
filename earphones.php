<?php 
	require_once("init.php");
	@$fid=$_REQUEST["fid"];
	$sql="SELECT * FROM earphones WHERE familyId='$fid'";
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
	<link rel="stylesheet" href="css/earphones.css">

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
	 		<h4><!-- 来自北欧的LIBRATONE Q系列耳机，为您带来北欧的清澈天籁，采用创新的CityMix可调节降噪技术，让你自由调节整个城市的声音，简洁优雅的北欧设计风格开启耳机的随身风尚。 --></h4>
	 		<div class="row">
				<!-- <div class="col-xs-6">
					 <div class="block">
						<div class=" inblock">
							<a href="">
								<img class="img-responsive" src="images/blockb1.jpg" alt="">
							</a>
						</div>
						<img class="img-responsive outimg" src="images/blockb2.jpg" alt="">
					 </div>	
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
	 		var data = <?php echo $result ?>;
	 		console.log(data)
	 		var html="";
	 		for(p of data){
	 			if(p.familyId==4){
	 				html+=`
	 				<div class="col-xs-6 col-sm-3 col-md-4 ">
						 <div class="block">
							<a href="javascript:;" class="outa">
									<img class="img-responsive" src="${p.img}" alt="">
							</a>
							<a href="detail.php?did=${p.detailId}"  class="ina">
								<img class="img-responsive" src="${p.subImg}" alt="">
							</a>
						 </div>	
					</div>
	 				`;
	 			}else{
	 			html+=`
					<div class="col-xs-6">
						 <div class="block">
							<a href="javascript:;" class="outa">
									<img class="img-responsive" src="${p.img}" alt="">
							</a>
							<a href="detail.php?did=${p.detailId}"  class="ina">
								<img class="img-responsive" src="${p.subImg}" alt="">
							</a>
						 </div>	
					</div>
	 			`;}
	 		}
	 		$("div.row").html(html);
	 		$("h1").html(data[0].fname);
	 		$("h4").html(data[0].word);
	 		var width = $("div.inblock").css("width");
	 		var height = $("div.inblock").css("height");
	 		
	 	})();
 	





 		(()=>{
 			/***load页脚*/
 			$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
 		})();
 	</script>
 </body>
 </html>