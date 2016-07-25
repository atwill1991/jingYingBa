$(".nav li").on("click",function(){
	var barLeft=$(".bar").width()*$(this).index();
	$(".bar").animate({left:barLeft});
	$(".nav").siblings().hide();
	var tab=$(".nav").siblings().eq($(this).index()+1);
	$(".bar").show();
	tab.show();
})
