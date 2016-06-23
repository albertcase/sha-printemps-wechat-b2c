<div class="page login">
	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/imgs/login_bg.jpg" width="100%" />
	<div class="loginContainer">
		<div class="login_con">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/imgs/logo.png" width="100%" />
			<div class="loginframe" style="display:inline-block;">
				<div class="login_tips">
					欢迎使用<br />
                    法国春天百货导游服务账号<br />
                    <span>请通过您的春天商务编号与<br />
                    您的姓氏登录，谢谢！</span>

				</div>

				<div class="login_form">
					<ul>
						<li>
							<p>春天商务编号： </p>
							<input type="text" name="code">
						</li>
						<li>
							<p>姓氏：</p>
							<input type="text" name="name">
						</li>
					</ul>
				</div>

				<a href="javascript:checkForm();" class="submit_btn">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/imgs/submit_btn.png" width="100%" />
				</a>
			</div>

			<div class="loginframe" id="successTips">
				<div class="lfScrollCon">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/imgs/success.png" width="100%" />
					<p>
						我们将在这里与您分享奥斯曼旗舰店和卢浮春天百货的最新产品、商务信息 以及最新活动资讯。
						如有需要，您可以在服务时间期间，通过《在线服务》联系奥斯曼旗舰店或卢浮春天百货国际部的团队。
					</p>
					<p>
						您也可以通过以下方式，随时跟我们联系，我们将竭诚为您服务。
					</p>
					<p>
						奥斯曼旗舰店国际部：<br>
						电话：<a href="tel:+33142825579">+33 1 42 82 55 79</a> 或  <a href="tel:+33142825580">+33 1 42 82 55 80</a>
					</p>
					<p>
						电邮：<a href="mailto:tborel@printemps.fr">tborel@printemps.fr</a> 或 <a href="mailto:hwang@printemps.fr">hwang@printemps.fr</a>
					</p>
					<p>
						更多详情敬请查询法国春天百货官方网站: <a href="http://www.printempsparis.cn" target="_blank">www.printempsparis.cn</a>
					</p>
				</div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/imgs/success.png" style="opacity:0;" width="100%" />
			</div>


		</div>


	</div>

</div>

<script type="text/javascript">
	var band = '<?php echo $band?>';
	if (band != 0) {
		var callbackTips;
		$(".loginframe").hide();
		$("#successTips").css({"display":"inline-block"});
		callbackTips = "验证成功";
		$("input").val("");
		funTips(callbackTips);
	}
	function funTips(callBt){
		$(".login_tips").addClass("error").html(callBt);
		setTimeout('$(".login_tips").removeClass("error").html("欢迎使用<br />法国春天百货导游服务账号<br />请你通过导游证编号与姓名登录<br />谢谢！");', 6000)
	}

	function checkForm(){
		var codenum = $("input[name=code]").val();
		var name = $("input[name=name]").val();

		if(codenum == ""){
			funTips("请输入导游证编号！");
		}else if(name == ""){
			funTips("请输入姓名！");
		}else{

			$.ajax({
		        type: "POST",
		        url: "/api/check",
		        data: {
		            "cardnum": codenum,
		            "name": name
		        },
		        dataType:"json"
		    }).done(function(data){
		    	var callbackTips;
		    	if(data.code == 1){
		    		$(".loginframe").hide();
		    		$("#successTips").css({"display":"inline-block"});
		    		callbackTips = "验证成功";
		    	}else{
		    		callbackTips = "<em>"+data.msg+"</em><p>如需要联系法国春天百货国际部</p><p>请致电：</p><p><a href='tel:+33142825579'>+33 1 42 82 55 79</a> <br /><a href='tel:+33142825580'>+33 1 42 82 55 80</a></p>";
		    	}
		    	
				$("input").val("");
				funTips(callbackTips);
		    })
			
		}
	}
</script>