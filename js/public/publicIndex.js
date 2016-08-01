$(function(){
			$("body").on("click",function(){
				$(".cur-location").removeClass("clickActive");
				$(".city-list-wrap").addClass("city-list-show-hide");
			})
			$(".cur-location").on("click",function(e){
				$(".cur-location").toggleClass("clickActive");
				$(".city-list-wrap").toggleClass("city-list-show-hide");
				e.stopPropagation();  //阻止事件传播(冒泡)
			})
			$(".city-list-wrap").on("mouseenter","li",function(){
				var index=$(this).index();
				$(".city-list-wrap img").removeClass("grayActive").eq(index).addClass("grayActive");
			})
			$(".city-list-wrap").on("click","li",function(){
				var index=$(this).index();
				var txt=$(".city-list-wrap em").eq(index).text();
				$(".cur-location").text(txt);
				// 事件模拟：
				$(".cur-location").trigger("click");
			})
			
			// 大图fade效果：
			var index=0;
			$(".select-bar>span").on("click",function(){
				index=$(this).index();
				fade();
			})
			function fade(){
				$(".img-wrap>a").fadeOut(500).eq(index).fadeIn(500);
				$(".select-bar>span").removeClass("selectActive").eq(index).addClass("selectActive");
			}
			function fadeLoop(){
				index++;
				if(index>=$(".select-bar>span").length){
					index=0;
				}
				fade();
			}
			var timer=setInterval(fadeLoop,2000);
			$(".img-wrap>a").on("mouseenter",function(){
				clearInterval(timer);
			})
			$(".img-wrap>a").on("mouseleave",function(){
				timer=setInterval(fadeLoop,2000);
			})
			// 底部的logo图标的事件：
			var len=$(".logo-icon-inner>li").length;
			var lastELe=$(".logo-icon-inner>li").eq(len-1);
			var firstEle=$(".logo-icon-inner>li").eq(0);
			$(".right-controler").on("click",function(){
				firstEle=$(".logo-icon-inner>li").eq(0);
				lastELe=$(".logo-icon-inner>li").eq(len-1);
				lastELe.css("width","0");
				lastELe.insertBefore(firstEle);
				lastELe.stop().animate({
					width:"150"
				},200)
			})
			$(".left-controler").on("click",function(){
				firstEle=$(".logo-icon-inner>li").eq(0);
				lastELe=$(".logo-icon-inner>li").eq(len-1);
				firstEle.stop().animate({
					width:0
				},200,function(){
					firstEle.css("width","150");
					firstEle.appendTo($(".logo-icon-inner"));
				})
			})
			// 返回顶部的事件：
			// 设置$(".go-top-wrap")的位置：
			$(".go-top-wrap").css("left",$(window).width()/2+$("footer").width()/2+20);
			// 改变屏幕大小时触发：
			$(window).resize(function(){
				$(".go-top-wrap").css("left",$(window).width()/2+$("footer").width()/2+20);
			})
			// 点击返回顶部：
			$(".gotop-btn").on("click",function(){
				$("html,body").animate({//加html兼容ie
					"scrollTop":0
				},600)
			})
		})