(()=>{
	/********轮播*******/
	$.ajax({
		url:"data/banner.php",
		type:"get",
		success:function(data){
			var html="";
			var html1="";
			var i = 0;
			for(p of data){
				i++;
				html+=`
				 <a href="earphones.php?fid=${p.fid}" class="bannera index${i}"><img src="${p.img}" class="img-responsive " alt="${p.bid}"></a>
				 `;
				 html1+=`
				<li><a href="${p.bid}"></a></li>
				 `;
			}
			$("div.banner").html(html);

			html1 = '<ul class="list-inline bannerind">'+html1+"</ul>";
			$("div.banner").append(html1);
			 $(".banner ul.bannerind li a[href=1]").addClass('hover')
		}
	
	})
	.then(()=>{
		var n=1;
		var t = setInterval(function(){
       n++;
       $("img[alt="+n+"]").parent("a").css({"opacity":1,"z-index":50}).siblings('a').css({"opacity":0,"z-index":10});
        $(".banner ul.bannerind li a[href="+n+"]").addClass('hover').parent("li").siblings('li').children('a').removeClass('hover');
       if(n>=5){
       	n=0;
       }
	},2500)
		$(".banner ul.bannerind li a").click((e)=>{
			e.preventDefault();
			var i = $(e.target).attr("href");
			n=i;
			$(".index"+i).css({"opacity":1,"z-index":50}).siblings('a').css({"opacity":0,"z-index":10});
			$(e.target).addClass('hover').parent("li").siblings('li').children('a').removeClass('hover');
			t=null;
		 //    t = setInterval(function(){
		 //       n++;
		 //       $("img[alt="+n+"]").parent("a").css({"opacity":1,"z-index":50}).siblings('a').css({"opacity":0,"z-index":10});
		 //        $(".banner ul.bannerind li a[href="+n+"]").addClass('hover').parent("li").siblings('li').children('a').removeClass('hover');
		 //       if(n==5){
		 //       	n=0;
		 //       }
			// },2500)
		})
		// $("div.banner>a").click((e)=>{
		// 	e.preventDefault();
		// 	var fid=$(e.target).parent("a").attr("href");
		// 	if(fid!=null){
		// 		location="index.html/earphones.php?fid="+fid;
		// 	}
		// })
	})

})();

/***中部***/
(()=>{
	$.ajax({
		url:"data/carousel.php",
		type:"get",
		success:function(data){
			var html ="";
			for(p of data){
				html+=`
					<div class="block block_${p.son}">
  						<div class=" inblock">
  							<a href="earphones.php?fid=${p.fid}">
  								<img src="${p.img}" alt="">
  							</a>
  						</div>
  						<img src="${p.subimg}" alt="">
    				</div>
    				
				`;

			}
			$("div.main").html(html);
			$(".main .block_e .inblock a").attr("href","article.php?aid=1")
			$(".main .block_f .inblock a").attr("href","article.php?aid=2")
		}
	})
	.then(()=>{
		$.ajax({
			url:"mp4.php",
			type:"get",
			success:function(data){
				var html="";
				for(p of data){
						html+=`
							<video src="${p.mp4}" controls class="mp4"></video>
						`;
				}
				$(".modal-body").append(html);
					$(".main .block_c .inblock a").attr("href","#modal-login").attr("data-toggle","modal");
					$(".main .block_d .inblock a").attr("href","#modal-login").attr("data-toggle","modal");
					$(".main .block_c .inblock a").click((e)=>{
							e.preventDefault();
							$(".mp4_div").css("display","block");
					})
					$(".main .block_d .inblock a").click((e)=>{
							e.preventDefault();
							$(".mp4_div").css("display","block");
					})
					

			}
		})
				
				
	})
})();


(()=>{
	/***load页脚*/
	$("div.loadfoot").load("foot.html",()=>{console.log(123165)});
})();
