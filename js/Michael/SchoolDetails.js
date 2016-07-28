$(".nav li").on("click",function(){
	var barLeft=$(".bar").width()*$(this).index();
	$(".bar").animate({left:barLeft});
	$(".nav").siblings().hide();
	var tab=$(".nav").siblings().eq($(this).index()+1);
	$(".bar").show();
	tab.show();
})
$(".mask").on("click",function(){
	$(this).hide();
});
$(".mask form").on("click",function(e){
	e.stopPropagation();
});
$(".alert").on("click",function(){
	$(".mask").show();
});
$(".close").on("click",function(e){
	e.stopPropagation();
	$(".mask").hide();
});
$(".cancel").on("click",function(e){
	$(".close").click();
});