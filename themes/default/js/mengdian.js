  $(document).ready(function(){
   $('.son_ul').hide(); //初始ul隐藏
   $('.select_box span').hover(function(){ //鼠标移动函数
	$(this).parent().find('ul.son_ul').slideDown();  //找到ul.son_ul显示
	$(this).parent().find('li').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}); //li的hover效果
	$(this).parent().hover(function(){},
						   function(){
							   $(this).parent().find("ul.son_ul").slideUp(); 
							   }
						   );
	},function(){}
										);
   $('ul.son_ul li').click(function(){
									$(this).parents('li').find('span').html($(this).html());
									$(this).parents('li').find('ul').slideUp();
									});
   }
   );