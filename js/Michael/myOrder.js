//个人中心部分Tab切换和浮标移动
$(".list li").on("click",function(){
	var barTop=$(".left .bar").height()*$(this).index();
	$(".left .bar").animate({top:barTop});
	$(this).addClass("active").siblings().removeClass("active");
});
//标题栏Tab切换和浮标移动
$(".titleList li").on("click",function(){
	if($(this).index()==$(".titleList li").length-1){
		return;
	}
	var barleft=$(".right .bar").width()*$(this).index();
	$(".right .bar").animate({left:barleft});
	$(this).addClass("active").siblings().removeClass("active");
	//根据列表的自定义属性与标题栏对应下标的显示
	var Titleindex=$(this).index();
	$(".listContent>li").hide();
	if($(this).index()==0){
		$(".listContent>li").show();
	}else{
		$(".listContent>li").each(function(index,item){
			if($(item).attr("data-status")==Titleindex){
				$(this).show().siblings().hide();
			}
		})
	}


});
//退款按钮Tab切换
$(".btn").on("click",function(){
	$(this).parent().find("form").toggle();
});
//删除订单
$(".del a").on("click",function(){

		$(".select").each(function(index,item){
			console.log(this.className);
			if(this.className=="select selected"){
				if(confirm("你确定要删除吗?")){	
					$(item).parent().slideUp(function(){
						$(item).parent().remove();				
					});
				}
			}
		});
	
});

//选项框中勾选状态切换
$(".select").on("click",function(){
	$(this).toggleClass("selected");
	// 当所有按钮都被勾上时全选框自动勾上
	var num=0;
	for(var i=1;i<$(".select").length;i++){
		if($(".select").eq(i).get(0).className=="select selected"){
			num++;
		}
		if(num==$(".select").length-1){
			$(".selectAll").addClass("selected");
		}else{
			$(".selectAll").removeClass("selected");
		}
	}
});
//全选框状态
$(".selectAll").on("click",function(){
	//未被勾上时所有select都不勾上
	if(this.className=="selectAll"){
		console.log(1)
		$(this).addClass("selected");
		$(".select").each(function(index,item){
			$(item).addClass("selected");
		});
	}//否则全部勾上
	else{
		$(this).removeClass("selected");
		$(".select").each(function(index,item){
			$(item).removeClass("selected");
		});		
	}
});
