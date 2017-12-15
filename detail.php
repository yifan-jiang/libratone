<?php 
	require_once("init.php");
	@$did=$_REQUEST["did"];
	$sql="SELECT * FROM phoneDetail WHERE did='$did'";
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
	<link rel="stylesheet" href="css/detail.css">
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
				<div class="col-xs-12 col-sm-4">
					<span class="title">asdasdasdasdasdasdsa</span>
				</div>	
				<div class="col-xs-12 col-sm-8 text-right">
					<ul class="list-inline">
						<li><a href="#ablock">外观设计</a></li>
						<li><a href="#bblock">声学技术</a></li>
						<li><a href="#cblock">操控体验</a></li>
						<li class="hide_li"><a href="#dblock">产品对比</a></li>
						<li><a class='buy' href="">购买</a></li>
					</ul>
				</div>			
	 		</div>
	 		<div class="row ablock under" id="ablock" >
				<div class="col-xs-12 imgarea">
					
				</div>
	 		</div>
			<div class="row bblock under" id="bblock">
				<div class="col-xs-12 imgarea">
							
				</div>
			 </div>
			 <div class="row cblock under" id="cblock">
			 	<div class="col-xs-12 imgarea">
			 				
			 	</div>
			 </div>
			 <div class="row dblock under" id="dblock">
			 	<div class="col-xs-12 imgarea">
			 				
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
 		var data = <?php echo $result ?>;
 		$("span.title").html(data[0].title);
 		if(data[0].did==2||data[0].did==3){
 			$("div.dblock").removeClass('hide_div');
 			$("li.hide_li").removeClass('hide_li');
 		}
 		var html="";
 		var html1="";
 		var html2="";
 		var html3="";
 		for(p of data){
 			if(p.block=="外观"){
 				html+=`
 					<img src="${p.img} " class="img-responsive" alt="">			
 				`; 				
 			}else if(p.block=="声学"){
 				html1+=`
 					<img src="${p.img} " class="img-responsive" alt="">			
 				`; 
 			}else if(p.block=="操控"){
 				html2+=`
 					<img src="${p.img} " class="img-responsive" alt="">			
 				`; 
 			}else if(p.block=="对比"){
 				html3+=`
 					<img src="${p.img} " class="img-responsive" alt="">			
 				`; 
 			}
 		}
 		$(".ablock div.imgarea").html(html);
 		$(".bblock div.imgarea").html(html1);
 		$(".cblock div.imgarea").html(html2);
 		$(".dblock div.imgarea").html(html3);

 		$("ul.list-inline li a").click((e)=>{
 			e.preventDefault();
 			if($(e.target).hasClass('buy')){

 			}else{
 			var id = $(e.target).attr("href");
 			$(id).css("display","block").siblings('div.under').css("display","none");
 			$(e.target).addClass('border').parent("li").siblings("li").children('a').removeClass("border");
 			}

 		})
 	</script>
 	<script>
	 	
 	





 		(()=>{
 			/***load页脚*/
 			$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
 		})();
 	</script>
 </body>
 </html>