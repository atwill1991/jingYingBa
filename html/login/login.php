<?php 
	$id=$_GET["id"];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>精英吧</title>
	<link rel="stylesheet" type="text/css" href="../../css/index/base.css">
	<link rel="stylesheet" type="text/css" href="../../css/public/public.css">
	<link rel="stylesheet" type="text/css" href="../../css/login/login.css">
</head>
<body>
	<!-- 头部的导航区域：-->
	<div class="header-wrap">
		<div class="header-inner clearfix">
			<!-- 图标logo： -->
			<div class="logo-wrap">
				<a href="../../index.html" class="logo-icon"><img src="../../img/public/logo-icon.png"></a>
				<span class="icon-font"><img src="../../img/public/logo-font.png"></span>
			</div>
			<!-- 功能按键： -->
			<ul class="action-list-wrap clearfix">
				<li>
					<a href="javascript:void(0)">课程</a>
				</li>
				<li>
					<a href="javascript:void(0)">互联网头条</a>
				</li>
				<li>
					<a href="javascript:void(0)"><span class="add-icon"></span>&nbsp;提问</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="content-wrap">
		<div class="content-inner">
			<div class="login-box">
				<ul class="login-tab-btn clearfix">
					<li class="login-tab selectBtnActive">登录</li>
					<li class="create-tab">注册</li>
				</ul>
				<ul class="info-wrap">
				<!-- 登录： -->
					<li class="info-login">
						<form action="../PersonalCenter/PersonalCenter.html">
							<label class="login-phone-wrap label-public">
								<input type="text" class="login-phone login" placeholder="请输入手机号"> 
							</label>
							<p class="login-phone-error">手机号不能为空</p>

							<label class="login-pwd-wrap label-public">
								<input type="password" class="login-pwd login" placeholder="请输入密码"> 	
							</label>
							<p class="login-pwd-error">密码不能为空</p>

							<div class="login-code-box clearfix">
								<label class="login-code-wrap label-public">
									<input type="text" class="login-code login" placeholder="验证码"> 
								</label>
								<a href="javascript:void(0)" class="get-test-code">
									<img src="code.php" id="code" width="90" height="30">
								</a>
							</div>
							<p class="login-code-error">请填写验证码</p>
							
							<label class="login-tips clearfix">
								<span></span>
								<input type="checkbox">
								<em>记住我</em>
								<a href="javascript:void(0)">忘记密码？</a> 
							</label>
							<label class="login-submit-wrap">
								<input type="button" value="登录" class="login-submit-btn"> 
							</label>
						</form> 
					</li>
				<!-- 注册： -->
					<li class="info-create">
						<form action="">
							<label class="create-phone-wrap label-public">
								<input type="text" class="create-phone create" placeholder="请输入手机号" name="createPhone"> 
							</label>
							<p class="create-phone-error">手机号不能为空</p>

							<div class="create-code-box clearfix">
								<label class="create-code-wrap label-public">
									<input type="text" class="create-code create" placeholder="验证码" name="createCode"> 
								</label>
								<a href="javascript:void(0)" class="get-phone-code">获取验证码</a>
							</div>
							<p class="create-code-error">验证码不能为空</p>

							<label class="create-pwd1-wrap label-public">
								<input type="password" class="create-pwd1 create" placeholder="请输入密码" name="createPwd1"> 	
							</label>
							<p class="create-pwd1-error">密码不能为空</p>

							<label class="create-pwd2-wrap label-public">
								<input type="password" class="create-pwd2 create" placeholder="请输入密码" name="createPwd2"> 	
							</label>
							<p class="create-pwd2-error">请再次输入密码</p>
							<label class="create-agree-item">
								<span class="bgItemActive"></span>
								<input type="checkbox" checked="checked" name="agree">
								<a href="javascript:void(0)">同意网站条款</a>
							</label>
							<p class="item-error">请勾选同意条款</p>
							<label class="create-submit-wrap">
								<input type="button" value="提交" class="create-submit-btn"> 
							</label>
						</form> 
					</li>
				</ul>
			</div>			
		</div>
	</div>
<!-- 最底部的信息: -->
	<address>
		<a href="javascript:void(0)">才信教育©2015-2017</a>
		<a href="javascript:void(0)">京ICP备16013954号</a>
	</address>
<!-- 提交成功的弹窗： -->
	<div class="mask-submit-wrap mask-wrap">
		<div class="alert-submit-content alert-content">
			<p class="tips clearfix">提示<span class="close-submit-btn close-btn"></span></p>
			<p class="success-text show-text ">
				<span>恭喜你，提交成功！</span>
			</p>
			<a href="javascript:void(0)" class="confirm-submit-btn confirm-btn">确定</a>
		</div>
	</div>
<!-- 手机号不存在的弹窗： -->
	<div class="mask-phone-wrap mask-wrap">
		<div class="alert-phone-content alert-content">
			<p class="tips clearfix">提示<span class="close-phone-btn close-btn"></span></p>
			<p class="fail-text show-text ">
				<span>很抱歉，该手机号不存在！</span>
			</p>
			<a href="javascript:void(0)" class="confirm-phone-btn confirm-btn">确定</a>
		</div>
	</div>
<!-- 登录权限的提示弹窗： -->
	<div class="mask-tips-wrap mask-wrap">
		<div class="alert-tips-content alert-content">
			<p class="tips clearfix">提示<span class="close-tips-btn close-btn"></span></p>
			<p class="tips-text show-text ">
				欢迎使用精英家产品，精英产品包括精英家、精英吧和口袋精英。
 				您目前只有精英吧的使用权限。
				请以后用此账户直接登录精英吧。
			</p>
			<a href="javascript:void(0)" class="confirm-tips-btn confirm-btn">确定</a>
		</div>
	</div>
	<script type="text/javascript" src="../../js/public/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			<?php 
				if($id==1){
			?>
			$(".login-tab").removeClass("selectBtnActive");
			$(".create-tab").addClass("selectBtnActive");
			$(".info-login").hide();
			$(".info-create").show();
			<?php 
				}
			 ?>
			// tab切换事件：
			$(".login-tab-btn").on("click","li",function(){
				$(".info-login p").hide();
				$(".info-create p").hide();
				var index=$(this).index();
				$(this).addClass("selectBtnActive").siblings().removeClass("selectBtnActive");
				$(".info-wrap>li").hide().eq(index).show();
			})
			// *******************登录页面的事件：
			var loginPhoneFlag=false;
			var loginPwdFlag=false;
			var loginCodeFlag=false;
			// 手机号码的正则检测：
			var regPhone=/^[1]\d{10}$/
			$(".login-phone").on("blur",function(){
				if(!regPhone.test($(".login-phone").val().trim())&&$(".login-phone").val().trim()){
					$(".login-phone-error").text("手机号码格式不正确");
					$(".login-phone-error").show();
					loginPhoneFlag=false;
				}else if(!$(".login-phone").val().trim()){
					$(".login-phone-error").text("手机号不能为空");
					$(".login-phone-error").show();
					loginPhoneFlag=false;
				}else{
					$(".login-phone-error").text("手机号不能为空");
					$(".login-phone-error").hide();
					loginPhoneFlag=true;
				}
			})
			$(".login-pwd").on("blur",function(){
				if(!$(".login-pwd").val().trim()){
					$(".login-pwd-error").show();
					loginPwdFlag=false;
				}else{
					$(".login-pwd-error").hide();
					loginPwdFlag=true;
				}
			})
			$(".login-tips>span").on("click",function(){
				$(".login-tips>input").trigger("click");//事件模拟,模拟input选择框
				$(this).toggleClass("bgTipsActive");
			})
			// 点击验证码图片进行更换：
			$(".get-test-code").on("click",function(){
				$("#code").attr("src","code.php");
			})
			// 验证码事件：
			$("input.login-code").on("blur", function() {
				if(!$("input.login-code").val().trim()){
					$(".login-code-error").text("验证码不能为空");
					$(".login-code-error").show();
					loginCodeFlag=false;
				}else{
					$.ajax({
						type:"GET",
						url:"checkCode.php",
						data: {
							code:$("input.login-code").val().trim()
						},
						dataType:"json",
						success:function(data) {
							console.log(data);
							if(data.msg == 1) {
								$(".login-code-error").hide();
								loginCodeFlag=true;
							}else {
								$(".login-code-error").text("请输入正确的验证信息");
								$(".login-code-error").show();
								loginCodeFlag=false;
							}
						}

					})
				}
			})
			//点击提交表单内容时:
			$(".login-submit-btn").on("click",function(){
				var j=0;
				// 判断输入框是否为空：
				$(".info-login input.login").each(function(index,key){
					// console.log("index:"+index);
					// console.log("key:"+key);
					if(!$(key).val().trim()){
						$(".info-login p").eq(index).show();
					}else{
						j++;
						console.log(j);
						$(".info-login p").eq(index).hide();
						$(".login-phone").trigger("blur");//事件模拟
						$(".login-pwd").trigger("blur");
						$(".login-code").trigger("blur");
						if(j==3&&loginPhoneFlag&&loginPwdFlag&&loginCodeFlag){
							//发起一个ajax的请求：
							$.ajax({
								type:"POST",
								url:"login-user.php",
								data:{
									loginPhone:$("input.login-phone").val(),
									loginpwd:$("input.login-pwd").val(),
								},
								dataType:"json",
								success:function(data){
									console.log(data);
									if(data.msg=="1"){
										location.href="../../html/PersonalCenter/PersonalCenter.html";
										console.log("成功");
									}else if(data.msg==2){
										alert("用户名和密码不匹配");
									}else{
										$(".mask-phone-wrap").show();
									}
								}
							})
						}
					}
				})
			})
			//********************** 注册页面的事件：
			var createFlag=false;
			// 手机号码的正则检测：
			$(".create-phone").on("blur",function(){
				if(!regPhone.test($(".create-phone").val().trim())&&$(".create-phone").val().trim()){
					$(".create-phone-error").text("手机号码格式不正确");
					$(".create-phone-error").show();
					createFlag=false;
				}else if(!$(".create-phone").val().trim()){
					$(".create-phone-error").text("手机号不能为空");
					$(".create-phone-error").show();
					createFlag=false;
				}else{
					$(".create-phone-error").text("手机号不能为空");
					$(".create-phone-error").hide();
					createFlag=true;
				}
			})
			 // 随机数：
			 function rand(min,max){
			 	return parseInt(Math.random()*(max-min)+min);
			 }
			 // 模拟手机发送的验证码：
			function strNumb(min,max){
				var arrNumb=[];
				for(var m=0;m<4;m++){
					arrNumb.push(rand(min,max));
				}
				if(m==4){
					return arrNumb.join("");
				}
			}
			var strNum=strNumb(0,10);
			$(".get-phone-code").on("click",function(){
				$(".create-phone").trigger("blur");//事件模拟
				if(createFlag){
					strNum=strNumb(0,10);
					alert(strNum);
				}
			})
			$(".create-code").on("blur",function(){
				var txt=$(".create-code").val().trim();
				if(txt==strNum){
					$(".create-code-error").hide();
					createFlag=true;
				}else if(txt=""){
					$(".create-code-error").text("验证码不能为空");
					$(".create-code-error").show();
					createFlag=false;
				}else{
					$(".create-code-error").text("验证码不正确");
					$(".create-code-error").show();
					createFlag=false;
				}
			})
			// 第二次输入的密码和第一次密码的比较的事件：
			$(".create-pwd2").on("blur",function(){
				var txt1=$(".create-pwd1").val();
				var txt2=$(".create-pwd2").val();
				if(txt1==txt2){
					$(".create-pwd2-error").hide();
					createFlag=true;
				}else{
					$(".create-pwd2-error").text("请输入相同的密码");
					$(".create-pwd2-error").show();
					createFlag=false;
				}
			})
			$(".create-agree-item>span").on("click",function(){
				$(".create-agree-item>input").trigger("click");//事件模拟,模拟input选择框
				$(this).toggleClass("bgItemActive");
			})
			//点击提交表单内容时:
			$(".create-submit-btn").on("click",function(){
				var i=0;
				// 判断输入框是否为空：
				$(".info-create input.create").each(function(index,key){
					// console.log("index:"+index);
					// console.log("key:"+key);
					if(!$(key).val().trim()){
						$(".info-create p").eq(index).show();
					}else{
						i++;
						console.log(i)
						$(".info-create p").eq(index).hide();
						$(".create-phone").trigger("blur");//事件模拟
						$(".create-pwd2").trigger("blur");//事件模拟
						$(".create-code").trigger(("blur"));//事件模拟
						if(i==3&&createFlag){
							// 发起一个ajax请求：
							$.ajax({
								type:"POST",
								url:"create-user.php",
								data:{
									createPhone:$("input.create-phone").val(),
									createPwd2:$("input.create-pwd2").val()
								},
								dataType:"json",
								success:function(data){
									console.log(data);
									if(data.msg==1){
										$(".mask-submit-wrap").show();
										$(".mask-tips-wrap").show();
										console.log("注册成功");
									}else if(data.msg==2){
										alert("该手机号已被注册");
									}else{
										alert("注册失败");
									}
								}
							})
						}
					}
				})
			})

			// 提交成功后的弹窗的事件：
			$(".close-submit-btn").on("click",function(){
				$(".mask-submit-wrap").hide();
			})
			$(".confirm-submit-btn").on("click",function(){
				$(".mask-submit-wrap").hide();
			})
			//手机号不存在的弹窗的事件：
			$(".close-phone-btn").on("click",function(){
				$(".mask-phone-wrap").hide();
			})
			$(".confirm-phone-btn").on("click",function(){
				$(".mask-phone-wrap").hide();
			})
			//登录权限的提示弹窗的事件：
			$(".close-tips-btn").on("click",function(){
				$(".mask-tips-wrap").hide();
			})
			$(".confirm-tips-btn").on("click",function(){
				$(".mask-tips-wrap").hide();
			})
			// 注册账号的事件：

		})
	</script>
</body>
</html>