<?php
require_once("init.php");
@$aid= $_REQUEST["aid"];
if($aid==1){
	$result = 1;
}else if($aid==2){
	$result = 2;
}else if($aid==3){
	$result= 3;
}else if($aid==4){
	$result=4;
}else if($aid==5){
	$result=5;
}else if($aid==6){
	$result=6;
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
		<link rel="stylesheet" href="css/article.css">
  <link rel="stylesheet" href="css/scroll.css">
</head>
<body>

		<div id="toTop">
        
    	</div>
		<div class="loadhead">

		</div>
		<div class="container">
			<div class="main main1">
				<h1>  品牌故事</h1>
				<div class="row">
					<div class="col-xs-12" class="">
							<img class="img-responsive" src="images/about_01.jpg" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12" class="">
							<img class="img-responsive" src="images/about_02.jpg" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12" class="">
							<img class="img-responsive" src="images/about_03.jpg" alt="">
					</div>
				</div>
				<div class="row lastdiv">
					<div class="col-xs-12" class="">
							<img class="img-responsive" src="themes/default/images/公司简介.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="main main2">
				<h1>所获奖项</h1>
				<div class="row">
					<div class="col-xs-12">
						<img src="images/jiang.jpg" class="img-responsive" alt="">
					</div>
				</div>
				<div class="no1">
					<div class="row">
						<div class="col-xs-12 text-center" ><span class="year">2016年</span></div>
						<div class="col-xs-12 word">
							<div class="row">
								<div class="col-xs-5"></div>
								<div class="col-xs-7 right">
										<h3>红点奖</h3>
										<span>Libratone ZIPP </span><br>
										<span>获奖类别: 产品设计</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="year">2014年</div>
				<div class="no2">
					<div class="row word">
								<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-7 left text-right">
											<h3>美国工业设计优秀奖</h3>
											<span>Libratone LOOP </span><br>
											<span>获奖类别: 娱乐</span>
										</div>
										<div class="col-xs-5"></div>
									</div>
								</div>
								<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-5"></div>
										<div class="col-xs-7 right">
											<h3>红点奖</h3>
											<span>Libratone LOOP </span><br>
											<span>获奖类别: 产品设计</span>
										</div>
										
									</div>
								</div>
								<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-7 left text-right">
											<h3>iF设计奖</h3>
											<span>Libratone LOOP </span><br>
											<span>获奖类别: 产品设计</span>
										</div>
										<div class="col-xs-5"></div>
									</div>
								</div>
								<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-5"></div>
										<div class="col-xs-7 right">
											<h3>CES国际消费电子展 创新设计与工程奖</h3>
											<span>Libratone LOOP </span><br>
											<span>获奖类别: 高端家居音响</span>
										</div>
										
									</div>
								</div>
								<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-7 left text-right">
											<h3>德国设计奖提名</h3>
											<span>Libratone ZIPP CLASSIC, LIVE, LOUNGE </span><br>
											<span>获奖类别: 生活方式</span>
										</div>
										<div class="col-xs-5"></div>
									</div>
								</div>
					</div>
				</div>
				<div class="year">2013年</div>
				<div class="no3">
					<div class="row word">
						<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-5"></div>
										<div class="col-xs-7 right">
											<h3>日本优良设计大奖</h3>
											<span>Libratone ZIPP CLASSIC </span><br>
											<span>获奖类别: 产品设计</span>
										</div>
										
									</div>
						</div>	
						<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-7 left text-right">
											<h3>CES国际消费电子展 创新设计与工程奖</h3>
											<span>Libratone ZIPP CLASSIC</span><br>
											<span>获奖类别：个人电子产品</span>
										</div>
										<div class="col-xs-5"></div>
									</div>
					    </div>
					    <div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-5"></div>
										<div class="col-xs-7 right">
											<h3>Dealerscope 最佳产品奖</h3>
											<span>Libratone ZIPP CLASSIC 获奖类别：Multi-Room音频流</span><br>
											<span></span>
										</div>
										
									</div>
						</div>
						<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-7 left text-right">
											<h3>美国Edison Award铜奖</h3>
											<span>Libratone ZIPP CLASSIC</span><br>
											<span>获奖类别: 娱乐</span>
										</div>
										<div class="col-xs-5"></div>
									</div>
					    </div>
					    <div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-5"></div>
										<div class="col-xs-7 right">
											<h3>iF产品设计奖</h3>
											<span>Libratone ZIPP CLASSIC</span><br>
											<span>获奖类别: 音响</span>
										</div>	
									</div>
						</div>	
					</div>
				</div>
				<div class="year">2012年</div>
				<div class="no4">
					<div class="row word">
						<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-7 left text-right">
											<h3>国际消费电子展 创新奖</h3>
											<span>Libratone LIVE</span><br>
											<span>获奖类别：个人电子产品</span>
										</div>
										<div class="col-xs-5"></div>
									</div>
					    </div>
					    <div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-5"></div>
										<div class="col-xs-7 right">
											<h3>日本优良设计大奖</h3>
											<span>Libratone LIVE, LOUNGE</span><br>
											<span>获奖类别: 音响</span>
										</div>
										
									</div>
						</div>
					</div>
				</div>
				<div class="year">2011年</div>
				<div class="no5">
					<div class="row word">
						<div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-7 left text-right">
											<h3>欧洲 Plus X奖</h3>
											<span>Libratone LIVE, BEAT</span><br>
											<span>获奖原因: 设计精良，操作简便</span>
										</div>
										<div class="col-xs-5"></div>
									</div>
					    </div>
					    <div class="col-xs-12 eachword">
									<div class="row word">
										<div class="col-xs-5"></div>
										<div class="col-xs-7 right">
											<h3>IDSA美国工业设计家协会 决赛入围</h3>
											<span>Libratone ZIPP CLASSIC</span><br>
											<span>获奖类别：娱乐</span>
										</div>
										
									</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main main3">
				<h1>创新科技</h1>
				<div class="row">
					<div class="col-xs-12">
						<img src="images/science_01.jpg" class="img-responsive" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<h3 style="font-weight: bold;">1. 什么是Wi-Fi无线音响？</h3>
						<h4>是指以Wi-Fi作为信息传输手段，通过Wi-Fi传输/接收音频信号，并通过喇叭播放的无线音响。</h4>
					</div>
					<div class="col-xs-12">
						<h3 style="font-weight: bold;">2. Wi-Fi无线音响与蓝牙无线音响的区别是什么？</h3>
						<h4>• Wi-Fi音响较蓝牙音响音频传输距离更远，穿墙能力更强，用户可在更远距离收听音频。</h4>
						<h4>• 蓝牙音响传输音频须经压缩，会使得音质受损，Wi-Fi音响传输可不压缩音频，提供更好的音质享受。</h4>
						<h4>• Wi-Fi音响可脱离手机使用，并直接收听在线内容， 且无线网络较蓝牙设备使用更广泛，用户使用Wi-Fi音响比蓝牙音响更便捷。</h4>
						<h4>• Wi-Fi的高带宽可支持多个音响间的互动，如组合多音响在多房间同步播放，而蓝牙音响之间的交互较少。Wi-Fi音响用户可获得更多样化的音响扩展功能。</h4>
					</div>
					<div class="col-xs-12">
						<h3 style="font-weight: bold;">3. Libratone Wi-Fi无线音响有什么优势？</h3>
						<h4>• 基于丹麦的设计哲学，简单的操作界面，多彩钻石纹网布外套可随心更换；</h4>
						<h4>• FullRoom声学技术提供均匀声场，用户在音响传声范围内的任何地方自由移动，皆可获得高品质聆听感受；</h4>
						<h4>• SoundSpace Link技术可组合多个音响高精度同步播放，并可设置左右声道，用户可通过SoundSpace Link探索声音的更多可能，获得更多样化的声音体验；</h4>
						<h4>• 内置5个在线电台，用户可获得10000+流媒体内容；</h4>
						<h4>• 获得全球主流音频协议认证：AirPlay，UPnP/DLNA，QPlay，Spotify Connect，为用户保证播放的稳定性和兼容性；</h4>
					</div>
					<div class="col-xs-12">
						<img src="images/science_02.jpg" class="img-responsive" alt="">
					</div>
					<div class="col-xs-12">
						<h3 style="font-weight: bold;">FullRoom环音技术， 360°均匀声场，不同位置同样的高音质享受<h3>
						<h4>高音指向性明显，低音无明显指向性，传统音响高音音波仅能往同一个方向推进，用户需要调教并固定于”最佳聆听区域“才能获得高品质听觉体验。Libratone无线音响均采用独特的FullRoom 环音技术，内置360°FullRoom反射体，能将高音声波向四面八方均匀扩散，在反射回弹后产生共振。这样的音质效果不仅能还原声音本色，更使聆听者在房间的各个角度均能享受同样优质的声音效果。 360°音场体验，让您可以自由移动，自由聆听。</h4>
					</div>
					<div class="col-xs-12">
						<img src="images/science_03.jpg" class="img-responsive" alt="">
					</div>
					<div class="col-xs-12">
						<h3 style="font-weight: bold;">1.	简单便捷的操控方法，轻松体验Libratone的SoundSpace Link<h3>
						<h4>•	使用App：指尖滑动，即可完成拖放建组、调整音量、左右声道切换等功能；</h4>
						<h4>•	使用音响按键：在每个音响上单击SoundSpace Link键，摆脱手机，一样可以便捷开启您的个性声音空间。</h4>
					</div>
					<div class="col-xs-12">
						<h3 style="font-weight: bold;">2.	支持多种音源，打造更加自由灵活的声音<h3>
						<h4>•	不再局限于同一Wi-Fi音源建组同步，多种音源都可使用SoundSpace Link功能同步到其他音响播放，包括AirPlay, DLNA, Spotify, USB音频, 在线电台, 甚至蓝牙和3.5mm有线输入</h4>
						<h4>•	通过任意方式给组内任意音响推送音乐，都可以立即在整组所有音响上同步播放。相较于通常的建组音响有固定主从关系，给从音响推送音乐不起作用，SoundSpace Link给您更灵活自由的多房间同步播放体验。</h4>
					</div>
					<div class="col-xs-12">
						<h3 style="font-weight: bold;">3.	精准同步，出色的稳定性<h3>
						<h4>•	同步精度小于0.5毫秒（一般方案同步精度在5毫秒左右），高度精准，声音中心位置无飘动，稳定听觉体验；</h4>
						<h4>•	自适应动态调整，稳定性好；</h4>
						<h4>•	建组过程不影响声音播放。</h4>
					</div>
					<div class="col-xs-12">
						<h3 style="font-weight: bold;">4.	智能化的组维护，无需重复操作<h3>
						<h4>•	音响能记录组信息，重启或断网重连后，自动加入组内，不需要重新建组。</h4>
					</div>
				</div>
			</div>
			<div class="main main4">
				<h1>联系我们</h1>
				<div class="row lianxius">
					<div class="col-xs-12 col-sm-4 leftdiv">
						<span class="bold">客户服务</span><br>
						<span>400-650-7810</span><br>
						<span>support@libratone.com.cn</span><br>
						<span class="bold">商务合作</span><br>
						<span>bd@libratone.com.cn</span><br>
						<span class="bold">销售与渠道合作</span><br>
						<span>sales@libratone.com.cn</span><br>
						<span class="bold">媒体合作</span><br>
						<span>pr@libratone.com.cn</span><br>
						<span class="bold">加入我们  </span>&nbsp;&nbsp;<a href="article.php?aid=5">查看职位</a><br>
						<span>hr@libratone.com.cn</span><br>
						<span class="bold">关注微信</span><br>
						<img src="themes/default/images/weixin.jpg" alt="">
					</div>	
				</div>
			</div>
			<div class="main main5">
				<h1>加入我们</h1>
				<div class="row">
					<div class="col-xs-12">
						<img src="images/加入我们1.jpg" class="img-responsive" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<h2>招聘职位</h2>
					</div>
					<div class="col-xs-12">
						<h3>DSP（声学）算法工程师</h3>
					</div>
					<div class="col-xs-12">
						<h4>岗位职责：</h4>
						<span>1．从事包括语音增强/回声消除/麦克风阵列等声音信号处理算法开发；</span><br>
						<span>2．从事包括虚拟环绕声/虚拟低音/虚拟混响/扬声器阵列等相关音效算法开发；</span><br></span><br>
						<span>3．负责算法方案在相关产品（如耳机/音箱/手机/电视）的应用与优化；</span><br>
						<span>4．负责算法设计文档,测试报告的撰写和整理工作；</span>
						<h4>岗位要求：</h4>
						<span>1．声学/信号/电子/通信/数学等相关专业，硕士及以上学历；</span><br>
						<span>2．熟悉数字信号处理理论和相关工具方法；</span><br>
						<span>3．熟练使用Matlab或同类工具进行算法设计和仿真验证；</span><br>
						<span>4．具有良好的沟通能力和逻辑分析能力；</span><br>
						<span>5．有声信号处理经验者优先；</span><br>
						<span>6．具有相关研究经历（含硕士/博士期间的研究经历）；</span>
						<h3>DSP算法移植工程师</h3>
						<h4>岗位职责：</h4>
						<span>1．从事数字信号处理算法在不同嵌入式平台下（Bluetooth/DSP/ARM）的移植和优化；<br>
						2．完成算法的整合与调试工作；<br>
						3．配合完成算法的测试及调试工作；<br>
						4．负责相关软件文档的撰写和整理；</span>
						<h4>岗位要求：</h4>
						<span>1．电子/通信/计算机/数学等相关专业，硕士及以上学历；<br>
						2．熟悉嵌入式开发，精通C/C++；<br>
						3．熟悉单片机、ARM或DSP芯片的处理器架构，精通汇编语言者优先；<br>
						4．具有不同嵌入式平台上的移植开发经验，有音频数字信号处理算法移植工作经验者优先；<br>
						5．了解数字信号处理理论及音频信号传输和编解码，有相关算法开发与优化工作经验者优先；<br>
						6．具有良好的代码风格和软件设计文档的编写经验；<br>
						7．具有相关工作经验（含硕士/博士期间的研究经历）。</span>
						<h3>声学工程师</h3>
						<h4>岗位职责：</h4>
						<span>1.  从事声学相关产品的研发与设计；</span>
						<h4>岗位要求：</h4>
						<span>1. 声学、电声学等相关专业，本科及以上学历；<br>
						2. 有较扎实的声学基础知识；<br>
						3. 熟悉声学设计,测量及仿真；<br>
						4. 具有电声相关工作经验者优先。</span>
						<h3>音频（音效）工程师 </h3>
						<h4>岗位职责：</h4>
						<span>1. 从事音效处理算法在产品平台（ARM）的软件实现和优化；<br>
						2. 负责算法的软件整合与调试工作；<br>
						3. 配合算法工程师完成算法的测试和调试优化；<br>
						4. 负责相应软件文档的撰写和整理。</span>
						<h4>岗位要求：</h4>
						<span>1. 信息、通信、电子等相关专业，本科及以上学历；<br>
						2. 以数字信号处理为方向的或硕士学历者优先；<br>
						3. 精通C和汇编语言，熟悉Matlab IDE和语言；<br>
						4. 有DSP芯片、ARM FPU/DSP指令编程经验者优先；<br>
						5. 有SBC、MP3、AAC编解码优化经验者优先；<br>
						6. 有滤波器、降噪算法优化经验者优先；<br>
						7. 具有良好的分析问题和解决问题的能力；<br>
						8. 有良好的协作精神和主动学习能力。</span>

					</div>
				</div>
			</div>
			<div class="main main6">
				<h1>我想购买Libratone</h1>
				<div class="row">
					<div class="col-xs-8">
						<img src="images/634455售后1.jpg" class="img-responsive" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<img src="images/634455售后2.jpg" class='img-responsive' alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<img src="images/634455售后5.jpg" class="img-responsive" alt="">
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
			var result = <?php echo $result?>;
			if(result==1){
				$(".main1").css("display","block").siblings(".main").css("display","none")
			}else if(result==2){
				$(".main2").css("display","block").siblings(".main").css("display","none");
			}else if(result==3){
				$(".main3").css("display","block").siblings(".main").css("display","none");
			}else if(result==4){
				$(".main4").css("display","block").siblings(".main").css("display","none");
			}else if(result==5){
				$(".main5").css("display","block").siblings(".main").css("display","none");
			}else if(result==6){
				$(".main6").css("display","block").siblings(".main").css("display","none");
			}





			(()=>{
				/***load页脚*/
				$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
			})();
		</script>
</body>
</html>