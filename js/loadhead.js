(()=>{
	$("div.loadhead").load("head.html",(e)=>{

			$(".header ul li.lang a").click((e)=>{
				e.preventDefault();
				var color= $(e.target).parent("li").css("background-color");
				console.log(color);
				if(color=='rgb(49, 106, 127)'){
					$(e.target).parent("li").css("background-color","#D8D8D8");
					$(e.target).css("color","#000");
					$(".header ul li.lang>div").css("display","none");
				}else{
					$(e.target).parent("li").css("background-color","#316A7F");
					$(e.target).css("color","#fff");
					$(".header ul li.lang>div").css("display","block");
				}
			})
			$("#ul_div div span.close_span a").click((e)=>{
				e.preventDefault();
				$("#ul_div").css("right","100%");
			})
			$(".header a span.hamburger").click((e)=>{
				e.preventDefault();
				$("#ul_div").css("right",0);
			})
			$('#in2').click((e)=>{
				e.preventDefault();
				var $input =$("#in1").val();
				console.log($input)
				location = "search.php?text="+$input;
			})
			$(".search_img a").click((e)=>{
				console.log(5151551551)
				e.preventDefault();
				$(".search_div").toggleClass("isshow");
			})
	})
})();
