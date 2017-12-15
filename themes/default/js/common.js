if (!window.console || !console.firebug){
    var names = ["log", "debug", "info", "warn", "error", "assert", "dir", "dirxml", "group", "groupEnd", "time", "timeEnd", "count", "trace", "profile", "profileEnd"];

    window.console = {};
    for (var i = 0; i < names.length; ++i)
        window.console[names[i]] = function() {}
}
$(function(){
	$(".block").hover(function(){
		$(this).addClass("nowHover");
		},function(){
		$(this).removeClass("nowHover");
	});
}) 


$(function(){
<!--nav开始-->
$(".nav>li").hover(function(e) {
   $(this).children("div").show();
},function(){
	$(this).children("div").hide();
});

if( $(window).width() > 1079 ){
	$(".nav>li").hover(function(e) {
	 $(this).children("div").show();
    },function(){
	  $(this).children("div").hide();
    });
}else{
	$(".nav>li").hover(function(e) {
	 $(this).children("div").show();
    },function(){
	  $(this).children("div").show();
    });
}

<!--nav结束-->


//返回顶部
var $backToTopTxt = "", $backToTopEle = $('<a class="backToTop"></a>').appendTo($("body"))
	.text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
		$("html, body").animate({ scrollTop: 0 }, 120);
}), $backToTopFun = function() {
	var st = $(document).scrollTop(), winh = $(window).height();
	(st > 0)? $backToTopEle.show(): $backToTopEle.hide();
	//IE6下的定位
	if (!window.XMLHttpRequest) {
		$backToTopEle.css("top", st + winh - 166);
	}
};
$(window).bind("scroll", $backToTopFun);
$(function() { $backToTopFun(); });
<!--返回顶部结束-->




<!--site开始-->

//search按钮
$(".site_con .li02").click(function(e) {
	 
	if($(".search").is(":visible")){
	   $(".search").hide();
	   $(".site_con .li02 a").removeClass("current02");
	   return ;
	}
	$(".cn").hide();
	$(".search").show();
	$(".site_con .li01 a").removeClass("current01");
	$(".site_con .li02 a").addClass("current02");
});
//cn按钮
$(".site_con .li01").click(function(e) {
	 
	if($(".cn").is(":visible")){
	   $(".cn").hide();
	   $(".site_con .li01 a").removeClass("current01");
	   return ;
	}
	$(".search").hide();
	 $(".cn").show();
	 $(".site_con .li02 a").removeClass("current02");
	$(".site_con .li01 a").addClass("current01");
});

       //点击全屏search、cn消失的效果
       function hideAll(){
		          $(".site_con .li02 a").removeClass("current02");
				  $(".site_con .li01 a").removeClass("current01");
				  $(".cn").hide();
				  $(".search").hide();
		
		}
		
		$(".site_con .li03").click(function(e){
				  hideAll();
		          e.stopPropagation();
		          e.preventDefault();
		});
		

		$(".site").click(function(e){
		   var targets=['.site','.cn','.cn_t','.cn_f','.cn_fl','.cn_fr'];
		     console.info(e.target);
			 if($(e.target).is(".site_conl")||$(e.target).parent().is(".site_conl")){
				 return true;
				 }
			  $.each(targets,function(i,current){
				  
			     if($(e.target).is(current)){
				    
				    hideAll();
					
					
				 }
			  });
			 //重点：冒泡 
		     e.stopPropagation();
		     e.preventDefault();
			 
		});
		
		$(".search").click(function(e){
		    if($(e.target).is(".search")){
				 hideAll();
				e.stopPropagation();
		        e.preventDefault();
			}
		});
		
		$(document).click(function(e){
			console.info("document"+e.target);
		    hideAll();
			
		});
		


<!--site结束-->

<!--CN国家点击span02图片变换的功能-->
$(".ul01 li,.ul02 li").click(function(e){
		
	 console.info(e);
	 location.href=$(this).attr("data-path");
	  e.stopPropagation();
	  e.preventDefault();
});


$(".cn_fl li").click(function(e) {
	
   $(this).children("a").css("background","#62b5c7 url(images/gou.png) no-repeat center center");
   $(this).siblings().children("a").css("background", "rgba(255,255,255,.1)");
   $(".cn_fr li").children("a").css("background", "rgba(255,255,255,.1)");
   $(".country .span03").html($(this).find("font").html());
	$(".country .span02").css("background-position", $(this).find("span").css("background-position") );
});
$(".cn_fr li").click(function(e) {
   
   $(this).children("a").css("background","#62b5c7 url(images/gou.png) no-repeat center center");
   $(this).siblings().children("a").css("background", "rgba(255,255,255,.1)");
   $(".cn_fl li").children("a").css("background", "rgba(255,255,255,.1)");
   $(".country .span03").html($(this).find("font").html());
  
   $(".country .span02").css("background-position", $(this).find("span").css("background-position") );
});
});

//手机版导航
/* 首页js效果 */
$(function(){

	
	//mobile 导航特效
	function primary(){
		var bodyw=$(window).width();
		var primaryNav=$('#primaryNav');
		if( $(window).width() > 1079 ){
			primaryNav.css({left:"auto"});
		}else{
			primaryNav.css({left:-bodyw});
		}
		return{
			bodyw:bodyw,
			primaryNav:primaryNav
		};
	}
	var primaryNav = primary().primaryNav;
	var bodyw= primary().bodyw;
	$('.visibleMobile').click(function(){
		$("#overlay").show();
		primary();
		primaryNav.css({display:"block"}).animate({left:0},200);
	})
	$('.hideMobile').click(function(){
		bodyw=$(window).width();
		primaryNav.animate({left:-bodyw},200,function(){
			$(this).hide();
			$("#overlay").hide();
		});
	})	
	
	function secondary(){
		var bodyw=$(window).width();
		var secondaryNav=$('.secondaryNav');
		secondaryNav.css({left:bodyw});
		return{
			bodyw:bodyw,
			secondaryNav:secondaryNav
		};
	}
	var secondaryNav = secondary().secondaryNav;
	var bodyw= secondary().bodyw;
	$('.visebleMobileSub').click(function(){
		if( $(window).width() <= 1079 ){
			secondary();
			$(this).next('div').css({display:"block"}).animate({left:0},200);
		}
	})
	$('.hideMobileSub').click(function(){
		bodyw=$(window).width();
		secondaryNav.animate({left:bodyw},200,function(){
			$(this).hide();
		});
	})
	$("#overlay").click(function(){
		primaryNav.fadeOut(function(){
			$(this).css({left:-bodyw});
			$("#primaryNav").hide();
		})
		secondaryNav.fadeOut(function(){
			$(this).css({left:bodyw})
			$(".secondaryNav").hide();
		})
		$(this).fadeOut();
	})
	
	
	
	$(window).resize(function(){
		var bodyw=$(window).width();
		if( bodyw > 1079 ){
			primaryNav.css({left:"auto",display:"block"});
			secondaryNav.css({left:"auto",display:"none"});
			$('#mobileSearch,#overlay').hide();
		}else if( primaryNav.css("left") == "0px" ){
			primaryNav.css({display:"block"});
		}else{
			$('#primaryNav').css({display:"none"});
		}
	})
	
	$(".live_jin").click(function(){
			//取到所有可切换的tab
	        var list=$(".app .live_con");
			//取到当前a标签的父元素的父元素（这个父元素即当前正在显示的选项卡tab，它的class包含.live_con ）
			var current=$(this).parent().parent();
			//取到所有可切换的tab的长度（为找到最后一个tab做准备）
			var length=list.length-1;
			
			console.info("length"+length);
			console.info("index"+list.index(current));
			
			//判断是不是最后一个tab
			if(list.index(current)<length){//不是最后一个tab
				
				list.eq(list.index(current)+1).show().siblings(".live_con").hide();
				live($("#a0").children("li").get(list.index(current)+1),list.index(current)+1);
				
				}else{//是最后一个tab
				
				$(".live_buy").click();
				//list.eq(0).show().siblings(".live_con").hide();
				//live($("#a0").children("li").get(0),0);
				
				}
			
			//if(list.index(current))
			//$(this).parent().parent().next().show().siblings(".live_con").hide();
	});	
	
});
  

//tab切换 
function live(thisObj,Num){
if(thisObj.className == "liveA")return;
var tabObj = thisObj.parentNode.id;
var tabList = document.getElementById(tabObj).getElementsByTagName("li");
for(i=0; i <tabList.length; i++)
{
if (i == Num)
{
   thisObj.className = "liveA"; 
   document.getElementById("a0"+Num).style.display = "block";
}else{
   tabList[i].className = "liveB"; 
   document.getElementById("a0"+i).style.display = "none";
}
} 
}



/* $Id : common.js 4865 2007-01-31 14:04:10Z paulgao $ */

/* *
 * 添加商品到购物车 
 */
function addToCart(goodsId, parentId)
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var formBuy      = document.forms['ECS_FORMBUY'];
  var quick		   = 0;

  // 检查是否有商品规格 
  if (formBuy)
  {
    spec_arr = getSelectedAttributes(formBuy);

    if (formBuy.elements['number'])
    {
      number = formBuy.elements['number'].value;
    }

	quick = 1;
  }

  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);

  Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), addToCartResponse, 'POST', 'JSON');
}


/* *
 * 处理添加商品到购物车的反馈信息
 */
function addToCartResponse(result)
{
  if (result.error > 0)
  {
    // 如果需要缺货登记，跳转
    if (result.error == 2)
    {
      if (confirm(result.message))
      {
        location.href = 'user.php?act=add_booking&id=' + result.goods_id + '&spec=' + result.product_spec;
      }
    }
    // 没选规格，弹出属性选择框
    else if (result.error == 6)
    {
      openSpeDiv(result.message, result.goods_id, result.parent);
    }
    else
    {
      alert(result.message);
    }
  }
  else
  {
    var cartInfo = document.getElementById('ECS_CARTINFO');
    var cart_url = 'flow.php?step=cart';
    if (cartInfo)
    {
      cartInfo.innerHTML = result.content;
    }

    if (result.one_step_buy == '1')
    {
      location.href = cart_url;
    }
    else
    {
      switch(result.confirm_type)
      {
        case '1' :
          if (confirm(result.message)) location.href = cart_url;
          break;
        case '2' :
          if (!confirm(result.message)) location.href = cart_url;
          break;
        case '3' :
          location.href = cart_url;
          break;
        default :
          break;
      }
    }
  }
}