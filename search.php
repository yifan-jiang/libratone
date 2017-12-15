<?php 
	require_once("init.php");
	@$text=$_REQUEST["text"];

	 $sql="SELECT * FROM earphones WHERE word LIKE '%$text%' ";
	 $sql1 = "SELECT count(*) FROM earphones WHERE word LIKE '%$text%' ";
	 $result = mysqli_query($conn,$sql1);
	 $row = mysqli_fetch_row($result);
	 $chanpin_count1= $row[0];
	 $arr =  sql_execute($sql);
	 $chanpin = json_encode($arr);

	 $sql = "SELECT * from news WHERE title LIKE '%$text%'";
	 $sql1 = "SELECT count(*) FROM news WHERE title LIKE '%$text%' ";
	 $result = mysqli_query($conn,$sql1);
	 $row = mysqli_fetch_row($result);
	 $chanpin_count2= $row[0];
	 $arr =  sql_execute($sql);
	 $news = json_encode($arr);

	 $sql = "SELECT * from mp4 WHERE title LIKE '%$text%'";
	 $sql1 = "SELECT count(*) FROM mp4 WHERE title LIKE '%$text%' ";
	 $result = mysqli_query($conn,$sql1);
	 $row = mysqli_fetch_row($result);
	 $chanpin_count3= $row[0];
	 $arr =  sql_execute($sql);
	 $video = json_encode($arr);

	 $sql = "SELECT * from usedetail WHERE title LIKE '%$text%'";
	 $sql1 = "SELECT count(*) FROM usedetail WHERE title LIKE '%$text%' ";
	 $result = mysqli_query($conn,$sql1);
	 $row = mysqli_fetch_row($result);
	 $chanpin_count4= $row[0];
	 $arr =  sql_execute($sql);
	 $else = json_encode($arr);
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
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/scroll.css">
 </head>
 <body>

<div id="toTop">
        
    </div>
 
 	<div class="loadhead">

 	</div>
 	<div class="container">
 		<div class="main">
	 		<h1>搜索结果</h1>
	 		<div class="row">
				<div  class="col-xs-11 text-center">
					<input id="searchinput" value="zipp" type="text">
					<input type="button" id="searchbutton">
				</div>
	 		</div>
	 		<div class="row">
				<div class="col-xs-6">
						<ul class="list-inline result">
							<li>全部(<span class="all"></span>)</li>
							<li>产品(<span class="chanpinspan"></span>)</li>
							<li>新闻(<span class="newsspan"></span>)</li>
							<li>视频(<span class="videospan"></span>)</li>
							<li>其他(<span class="elsespan"></span>)</li>
						</ul>
				</div>
	 		</div>
	 		<div class="show">
				<h1>产品(共<span class="chanpinspan"></span>个结果)</h1>
				<div class="row chanpindiv">
					<!-- <div class="col-xs-12"></div> -->
				</div>
				<a class="moredetail" href="javascript:;">查看更多关于"<span class="moreresult"></span>"的产品</a>
				<!---->
				<h1>新闻(共<span class="newsspan"></span>个结果)</h1>
				<div class="row newsdiv">
					<!-- <div class="col-xs-12">
							<span></span><a href="">查看详情</a>
					</div> -->
				</div>
				<a  class="moredetail"  href="javascript:;">查看更多关于"<span class="moreresult"></span>"的新闻</a>
				<!---->
				<h1>视频(共<span class="videospan"></span>个结果)</h1>
				<div class="row videodiv">
					<!-- <div class="col-xs-12">
						<h3></h3>

					</div> -->
				</div>
				<a  class="moredetail"  href="javascript:;">查看更多关于"<span class="moreresult"></span>"的视频</a>
				<!---->
				<h1>其他(共<span class="elsespan"></span>个结果)</h1>
				<div class="row elsediv">
					<!-- <div class="col-xs-12">
						<div class="row">
							<span></span><a href="">查看详情</a>
						</div>
					</div> -->
				</div>
				<a  class="moredetail"  href="javascript:;">查看更多关于"<span class="moreresult"></span>"的其他</a>
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
 			$("#searchbutton").click((e)=>{
 				console.log(5616511156)
 				e.preventDefault();
 				var $input =$("#searchinput").val();
 				location = "search.php?text="+$input;
 			})

 			$(".moreresult").html($("#searchinput").val());
 			var data1 = <?php echo $chanpin ?>;   var data1count = <?php echo $chanpin_count1 ?>;
 			var data2 = <?php echo $news ?>;   var data2count = <?php echo $chanpin_count2 ?>;
 			var data3 = <?php echo $video ?>;   var data3count = <?php echo $chanpin_count3 ?>;
 			var data4 = <?php echo $else ?>;   var data4count = <?php echo $chanpin_count4 ?>;
 			$(".all").html(data1count+data2count+data3count+data4count);
 			$(".chanpinspan").html(data1count);
 			$(".newsspan").html(data2count);
 			$(".videospan").html(data3count);
 			$(".elsespan").html(data4count);
 			var html1 = "";var html2 = "";var html3 = "";var html4 = "";
 			var i1=0; var i2=0; var i3=0; var i4=0;
 			for(var p1 of data1){
 				i1++;
 				if(i1>=5){
 					break;
 				}
 				html1+=`
 				<div class="col-xs-12">
					<div class="block">
							<a href="javascript:;" class="outa">
									<img class="img-responsive" class="img-responsive" src="${p1.img}" alt="">
							</a>
							<a href="detail.php?did=${p1.detailId}"  class="ina">
								<img class="img-responsive"  class="img-responsive" src="${p1.subImg}" alt="">
							</a>
					</div>	
				</div>
 				`;
 			}
 			$(".chanpindiv").html(html1);
 			for(var p2 of data2){
 				i2++;
 				if(i2>=7){
 					break;
 				}
 				html2+=`
 					<div class="col-xs-12">
							<a href="newsdetail.php?nid=${p2.nid}"><span>${p2.title}</span></a>
							<a href="newsdetail.php?nid=${p2.nid}" class="lookmore">查看详情</a>
					</div>
 				`;	
 			}
 			$(".newsdiv").html(html2);
 			for(var p3 of data3){
 				html3+=`
					<div class="col-xs-12">
						<h3>${p3.title}</h3>
						<video src="${p3.mp4}" controls="controls"></video>
					</div>
 				`;
 			}
 			$(".videodiv").html(html3);
 			for(var p4 of data4){
 				i4++;
 				if(i4>=5){	
 					break;
 				}
 				html4+=`
					<div class="col-xs-12">
						<div class="row">
							<a href="support.php?useid=${p4.uid}"><span>${p4.title}</span></a>
							<a href="support.php?useid=${p4.uid}" class="lookmore">查看详情</a>
						</div>
					</div>
 				`;
 			}
 			$(".elsediv").html(html4);
 		})();


 		(()=>{
 			/***load页脚*/
 			$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
 		})();
 	</script>
 </body>
 </html>