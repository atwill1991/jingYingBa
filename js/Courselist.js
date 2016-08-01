$(".list_tab li a").on("click",function(){
	$(this).addClass("active").parent().siblings().find("a").removeClass("active");
	barLeft=$(this).parent().index()*110;
	$(".bar").animate({left:barLeft});
});
var len=0;
var CourseData;
var phpArr=[];//PHP课程
var iosArr=[];
var androidArr=[];
var html5Arr=[];
getCoureseData();
function getCoureseData(n){
	$.ajax({
		type:"get",
		url:"../../../php/coureseData.php",
		dataType:"json",
		success:function(data){
			//第一页先显示20条填充第一页
			CourseData=data;
			$(".totalCorse").html("共"+data.length+"条");
			fillData(1,data);
			//生成对应页码
			createPage(CourseData);

 			phpArr=fillObj("PHP");
 			iosArr=fillObj("IOS");
 			androidArr=fillObj("Android");
 			html5Arr=fillObj("HTML5");
 			 //全部点击
 			$(".subject a").eq(0).on("click",function(){
  				fillData(1,CourseData);
  				createPage(CourseData);
 			});
 			//PHP点击
 			$(".subject a").eq(1).on("click",function(){
  				fillData(1,phpArr);
  				createPage(phpArr);
 			});
 			//IOS点击
  			$(".subject a").eq(2).on("click",function(){
  				fillData(1,iosArr);
  				createPage(iosArr);
 			});	
 			//androd点击
   			$(".subject a").eq(3).on("click",function(){
  				fillData(1,androidArr);
  				createPage(androidArr);
 			});			
 			//HTML点击
   			$(".subject a").eq(4).on("click",function(){
  				fillData(1,html5Arr);
  				createPage(html5Arr);
 			});	 						
		}
	});
}
$(".subject a").on("click",function(){
	$(this).addClass("active").siblings().removeClass("active");
});
 function fillData(n,data){
 	$(".course_detail").html("");
 	$(".totalCorse").html("共"+data.length+"条");
 	var len=0;
 	if(data.length/20>=n){
 		len=n*20;
 	}else{
 		len=(n-1)*20+(data.length%20);
 	}
	for(var i=(n-1)*20;i<len;i++){
		$(".course_detail").get(0).innerHTML+='<li>'+
			'<a href="./CourseDetail/Course.html?'+data[i].id+'">'+
				'<img src="'+data[i].imgsrc+'" alt="" />'+
				'<dl>'+
					'<dt>'+data[i].title+'</dt>'+
					'<dd>['+data[i].area+'] 课程类型:'+data[i].Class+'</dd>'+
					'<dd class="clearfix">'+
						'<em>&yen;1000</em>'+
						'<s>&yen;1500</s>'+
						'<span>'+data[i].sold+'</span>'+
					'</dd>'+
				'</dl>'+
				'<i>'+data[i].score+"分</i>"
			'</a>'+
		'</li>';
	}
 }
//本地分类

function fillObj(name){
	var obj=[];
for(var i=0;i<CourseData.length;i++){
	if(CourseData[i].Class==name){
		obj.push(CourseData[i]);
		}
	}
  return obj
}
			//生成对应页码
			function createPage(data){
				var len=Math.ceil(data.length/20);//总共页数
				$(".pagination").html('<a href="javascript:void(0)" class="last">上一页</a><a href="javascript:void(0)" class="next">下一页</a>')
					for(var j=1;j<=len;j++){
						var $a=$('<a href="javascript:void(0)" class="pages">'+j+'</a>');
							if(j==1)$a.addClass("active");
							$a.insertBefore($(".next"));
					}
				$(".pages").on("click",function(){
 				$(this).addClass("active").siblings(".pages").removeClass("active");
 						fillData($(this).index(),data);
 				});	
 				$(".last").on("click",function(){
						switchPages(0,data);
 				});
 				$(".next").on("click",function(){
						switchPages(1,data);
 				}); 				
			}

//上一页下一页count代表加减 0代表上一页，1代表下一页
function switchPages(count,data){
		var index=$(".pagination .active").index();
		if(count==0){
			index--;
				if(index<1){
				index=1;
			}			
		}else{
			index++;
				if(index>$(".pagination .pages").length){
				index=$(".pagination .pages").length;
			}				
		}
		$(".pagination a").eq(index).addClass("active").siblings(".pages").removeClass("active");
		fillData(index,data);	
}
