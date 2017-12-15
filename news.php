<?php 
	require_once("init.php");
	$sql="SELECT * FROM news";
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
		<link rel="stylesheet" href="css/news.css">
		<link rel="stylesheet" href="css/scroll.css">
</head>
<body>


<div id="toTop">
        
    </div>
		<div class="loadhead">

		</div>
		<div class="container">
			<div class="main">
				<div class="row toplist">
					<div class="col-sm-6">
						<h1>新闻中心</h1>
					</div>
					<div class="col-sm-6">
						<ul class="list-inline text-right">
							<li><a href="#ceping">评测</a></li>
							<li><a href="#xinwen">新闻</a></li>
							<li><a href="#shipin">视频</a></li>
						</ul>
					</div>
					
				</div>
				<div class="row ceping newdiv" id="ceping">
				</div>
				<div class="row xinwen newdiv" id="xinwen">
				</div>
				<div class="row shipin newdiv" id="shipin">
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
					var html = "";
					var html1= "";
					var html2= "";
					for(p of data){
						if(p.class=="评测"){
							html+=`
							<div class="col-sm-6">
								<div>
									<h3><a href="newsdetail.php?nid=${p.nid}">${p.title}</a></h3>
									<a href="newsdetail.php?nid=${p.nid}"><img src="${p.img}" alt="" class="img-responsive"></a>
									<p>${p.subtitle}</p>
									<div class="row">
										<div class="col-xs-6">
											<span class="come">${p.come}</span>
										</div>
										<div class="col-xs-6 text-right">
											<a href="newsdetail.php?nid=${p.nid}">阅读全文></a>
										</div>
									</div>
								</div>
							</div>
						`;
						}else if(p.class=="新闻"){
							html1+=`
							<div class="col-sm-6">
								<div>
									<h3><a href="newsdetail.php?nid=${p.nid}">${p.title}</a></h3>
									<a href="newsdetail.php?nid=${p.nid}"><img src="${p.img}" alt="" class="img-responsive"></a>
									<p>${p.subtitle}</p>
									<div class="row">
										<div class="col-xs-6">
											<span class="come">${p.come}</span>
										</div>
										<div class="col-xs-6 text-right">
											<a href="newsdetail.php?nid=${p.nid}">阅读全文></a>
										</div>
									</div>
								</div>
							</div>
							`;
						}else if(p.class=="视频"){
							html2+=`
							<div class="col-sm-6">
								<div>
									<h3><a href="newsdetail.php?nid=${p.nid}">${p.title}</a></h3>
									<a href="newsdetail.php?nid=${p.nid}"><img src="${p.img}" alt="" class="img-responsive"></a>
									<p>${p.subtitle}</p>
									<div class="row">
										<div class="col-xs-6">
											<span class="come">${p.come}</span>
										</div>
									</div>
								</div>
							</div>
							`;
						}
					}
					$(".ceping").html(html);
					$(".xinwen").html(html1);
					$(".shipin").html(html2);
					$(".toplist ul li a").click((e)=>{
						e.preventDefault();
						$(e.target).css("border-top","3px solid #000").parent("li").siblings("li").children("a").css("border-top","none");
						var id = $(e.target).attr("href");
						console.log(id)
						$(id).css("display","block").siblings(".newdiv").css("display","none");
					})
				})();




			(()=>{
				/***load页脚*/
				$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
			})();
		</script>
</body>
</html>
