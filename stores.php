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
		<link rel="stylesheet" href="css/stores.css">
		  <link rel="stylesheet" href="css/scroll.css">
</head>
<body>
<div id="toTop">
        
    </div>
		<div class="loadhead">

		</div>
		<div class="container">
			<div class="main">
				<div class="row" style="margin-bottom: 50px;">
					<div class="col-xs-12 top">
						<h1 class="toplist">线下门店</h1>
						<div class="chose toplist">
							<a href="" class="chosea">选择区域</a>
							<ul class="cityul">
								<li><a href="stores.php">全国</a></li>
								<li><a href="stores.php?city=北京">北京</a></li>
								<li><a href="stores.php?city=上海">上海</a></li>
								<li><a href="stores.php?city=重庆">重庆</a></li>
								<li><a href="stores.php?city=河北">河北</a></li>
								<li><a href="stores.php?city=河南">河南</a></li>
								<li><a href="stores.php?city=山东">山东</a></li>
								<li><a href="stores.php?city=江苏">江苏</a></li>
								<li><a href="stores.php?city=浙江">浙江</a></li>
								<li><a href="stores.php?city=安徽">安徽</a></li>
								<li><a href="stores.php?city=江西">江西</a></li>
								<li><a href="stores.php?city=广东">广东</a></li>
								<li><a href="stores.php?city=广西">广西</a></li>
								<li><a href="stores.php?city=福建">福建</a></li>
								<li><a href="stores.php?city=四川">四川</a></li>
								<li><a href="stores.php?city=云南">云南</a></li>
								<li><a href="stores.php?city=贵州">贵州</a></li>
								<li><a href="stores.php?city=辽宁">辽宁</a></li>
								<li><a href="stores.php?city=陕西">陕西</a></li>
								<li><a href="stores.php?city=甘肃">甘肃</a></li>
								<li><a href="stores.php?city=新疆">新疆</a></li>
								<li><a href="stores.php?city=海南">海南</a></li>
								<li><a href="stores.php?city=内蒙古">内蒙古</a></li>
								<li><a href="stores.php?city=吉林">吉林</a></li>
								<li><a href="stores.php?city=山西">山西</a></li>
								<li><a href="stores.php?city=黑龙江">黑龙江</a></li>
								<li><a href="stores.php?city=湖北">湖北</a></li>
								<li><a href="stores.php?city=湖南">湖南</a></li>
								<li><a href="stores.php?city=天津">天津</a></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<ul class="store_detail">
							<li>
								<span></span><br>
								<span></span>
							</li>
						</ul>
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
				var data = <?php echo $result  ?>;
				var html="";
				for(p of data){
					html+=`
						<li>
							<span>${p.store}</span><br>
							<span>${p.address}</span>
						</li>
					`;
				}
				$(".store_detail").html(html);

			})();




			(()=>{
				/***load页脚*/
				$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
			})();
		</script>
</body>
</html>
