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
//PHP获取ID数据处理
var id=parseInt(location.search.substring(1));
function getData(){

	$.ajax({
		type:"post",
		url:"../../../../php/coureseDetail.php",
		data:{id:id},
		dataType:"json",
		success:function(data){
			$(".CoureseBanner .left img").attr("src",data.imgsrc);
			$(".CoureseBanner .right h1").html(data.title);
			$(".CoureseBanner dd em").eq(0).html(data.sold.substring(2));
			$(".CoureseBanner dd em").eq(1).html(data.score+".0");
		}
	})
}
//热销课程数据导入
function hotCourseData(id,ele){
	$.ajax({
		type:"post",
		url:"../../../../php/coureseDetail.php",
		data:{id:id},
		dataType:"json",
		success:function(data){
			ele.find("img").attr("src",data.imgsrc);
			ele.find("dt").html(data.title);
		}		
	})
}
getData();
hotCourseData(id-1,$(".wrap li").eq(0));
hotCourseData(id+1,$(".wrap li").eq(1));