$(".Coursedetail .left ul li").on("click",function(){
	var index=$(this).index();
	var barLeft=index*144;
	 $(".bar").animate({left:barLeft});
	 $(".Coursedetail .tab").eq(index).show().siblings(".tab").hide();
});
$(".mask").on("click",function(){
	$(this).hide();
});
$(".mask form").on("click",function(e){
	e.stopPropagation();
});
$(".consulting").on("click",function(){
	$(".mask").show();
});
$(".close").on("click",function(e){
	e.stopPropagation();
	$(".mask").hide();
});
$(".cancel").on("click",function(e){
	$(".close").click();
});

