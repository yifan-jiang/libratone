<?php 
	require_once("init.php");
	@$useid = $_REQUEST["useid"];
	if($useid==null){
		$sql = "SELECT * FROM buy";
		$arr =  sql_execute($sql);
		$rows = json_encode($arr);
		$result=-1;
	}else if($useid==4){
		$result =2;
		$sql = "SELECT title FROM usedetail WHERE uid =$useid ";
		$arr =  sql_execute($sql);
		$rows = json_encode($arr);
	}else{
		$result =1;
		$sql = "SELECT title FROM usedetail WHERE uid =$useid ";
		$arr =  sql_execute($sql);
		$rows = json_encode($arr);
	}
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
		<link rel="stylesheet" href="css/support.css">
		  <link rel="stylesheet" href="css/scroll.css">
</head>
<body>


<div id="toTop">
        
    </div>
		<div class="loadhead">

		</div>
		<div class="container">
			<div class="main main0">
				<div class="row">
					<div class="col-xs-12">
						<h1>我已购买Libratone</h1>
						<p>点击相应Libratone 产品或APP的图片，查看连接方式及音乐播放指南。</p>	
					</div>
				</div>
				<div class="row listdiv">
					
					
				</div>
			</div>
			<div class="main main1">
				<div class="title row">
					<div class="col-xs-12">
						<h1 class="bigtitle"></h1>
					</div>
				</div>
				<div class="detail">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="cititle">通过无线网络连接</h1>
						</div>
						<div class="col-xs-12">
							<h2>下载LIBRATONE APP</h2>
						</div>
					</div>
					<div class="row first">
						<div class="col-xs-12 col-sm-6 ">
							<span>Android用户：<br>
									可扫描以下二维码，或直接在各大安卓应用市场搜索“Libratone”下载并安装应用。</span><br>
								<img src="images/guide_02.jpg"  class="img-responsive" alt="">
						</div>
						<div class="col-xs-12 col-sm-6 ">
							<span>iOS用户：<br>
								可通过扫描以下二维码，或直接在APP Store搜索“Libratone”下载并安装应用</span><br>
								<img src="images/guide_01.jpg"  class="img-responsive" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<h3>将音响连接至Wi-Fi</h3>
						</div>
						<div class="col-xs-12 text-center">
							<h3 class="fangshi">方式一：通过Libratone APP连接</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 ">
							<span>步骤一：<br>
								长按Libratone音响操作界面小鸟图标3秒，指示灯交替闪烁，进入设置模式</span>
						</div>
						<div class="col-xs-12 col-sm-6">
							<img src="images/guide_01.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 ">
							<span>步骤二：<br>
								方法1：运行APP，在“SOUNDSPACES”界面，点击“添加新音响”或“+”，按提示步骤操作完成网络连接</span>
								<img src="images/guide_04.jpg" class="img-responsive" alt="">
						</div>
						<div class="col-xs-12 col-sm-6">
							<span>方法2：运行APP，点击右上角小鸟图标，进入APP导航页面，点击“添加新音响”，按提示步骤操作完成网络连接</span>
								<img src="images/guide_06.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="fangshi">方式二：iOS用户通过iOS设备直接将音响连接至Wi-Fi</h2>		
						</div>
					</div>
					<div class="row first">
						<div class="col-xs-12 col-sm-6 ">
							<span>步骤一：长按Libratone音响操作界面小鸟图标3秒，指示灯交替闪烁，进入设置模式</span>
						</div>
						<div class="col-xs-12 col-sm-6 ">
							<img src="images/guide_03.png" class="img-responsive" alt="">
						</div>
						<div class="col-xs-12 col-sm-6 ">
							<span>步骤二：打开您的iOS设备设置栏目，在“无线局域网”中找到“设置AIRPLAY扬声器”，选择Libratone音响</span>
								<img src="images/guide_40.jpg" class="img-responsive" alt="">
						</div>
						<div class="col-xs-12 col-sm-6 ">
							<span>步骤三：按操作提示选择您要连接的无线网络并点击“下一步”即可等待完成连接</span>
								<img src="images/guide_42.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="cititle">通过蓝牙连接</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<span>步骤一：<br>
							长按Libratone音响操作界面小鸟图标3秒，指示灯交替闪烁，进入设置模式</span>
						</div>
						<div class="col-xs-12 col-sm-6">
							<img src="images/guide_03.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="row first">
						<div class="col-xs-12 col-sm-6">
							<span>步骤二：打开播放设备的蓝牙设置，搜寻并连接您的Libratone音响设备，即可播放和享受音乐</span>
							<img src="images/guide_47.jpg" class="img-responsive" alt="">
						</div>
						<div class="col-xs-12 col-sm-6">
							<span>步骤三：打开播放设备的蓝牙设置，搜寻并连接您的Libratone音响设备，即可播放和享受音乐</span>
						</div>
					</div>
					<div class="row first">
						<div class="col-xs-12  text-center">
							<h1 class="cititle spc">通过3.5MM音频线或iOS数据线连接</h1><br>
							<span>使用音频线或iOS数据线连接音响与您的音频设备即可播放</span>
						</div>
					</div>
					<div class="row first">
						<div class="col-xs-12  text-center">
							<h1 class="cititle">通过U盘连接</h1><br>
							<span>插入U盘，待音响准备就绪后轻按小鸟即可播放</span>
						</div>
					</div>
				</div>
			</div>
			<div class="main main2">
				<div class="title row">
					<div class="col-xs-12">
						<h1 class="bigtitle"></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<img src="images/app.png" class="img-responsive" alt="">
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
				var data = <?php echo $rows ?>;
				console.log(data);
				var html="";
				for(p of data){
					html+=`
						<div class="col-xs-3">
						<a href="support.php?useid=${p.useid}"><img  class="img-responsive look" src="${p.subimg}" alt=""></a>
						<a href="support.php?useid=${p.useid}"><img  class="img-responsive" src="${p.img}" alt=""></a>
					</div>
					`;
				}
				$(".main0 div.listdiv").html(html);
			})();

			(()=>{				
				 var result = <?php echo $result ?>;
				 if(result==1){
				 	$(".main1").css("display","block").siblings(".main").css("display","none");
				 }else if(result===-1){
				 	$(".main0").css("display","block").siblings(".main").css("display","none");
				 }else{
				 	$(".main2").css("display","block").siblings(".main").css("display","none");
				 }
				// if(result!=null){
				// 	if(result==1){
				// 		$(".main1").css("display","block").siblings(".main").css("display","none")
				// 	}else if(result==2){
				// 		$(".main2").css("display","block").siblings(".main").css("display","none");
				// 	}else if(result==3){
				// 		$(".main3").css("display","block").siblings(".main").css("display","none");
				// 	}else if(result==4){
				// 		$(".main4").css("display","block").siblings(".main").css("display","none");
				// 	}else if(result==5){
				// 		$(".main5").css("display","block").siblings(".main").css("display","none");
				// 	}
				// }
				var data = <?php echo $rows ?>;
				$(".title h1").html(data[0].title);

			})();

			(()=>{
				/***load页脚*/
				$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
			})();
		</script>
</body>
</html>
