<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<!--  <meta http-equiv="Cache-Control" content="no-cache,no-store, must-revalidate"> 
<meta http-equiv="pragma" content="no-cache"> 
<meta http-equiv="expires" content="0"> -->
<script type="text/javascript"> window.history.forward(1);</script> 
<?php if(APP_DEBUG){ ?>
<script type="text/javascript" src="__JQUERY__/jquery/src/jquery-1.11.3.js"></script>
<?php }else{ ?>
<script type="text/javascript" src="__JQUERY__/jquery/jquery-1.11.3.min.js"></script>
<?php } ?>
<?php if(APP_DEBUG){ ?>
<link href="__JQUERY__/mobile/src/jquery.mobile.icons-1.4.5.css" rel="stylesheet">
<link href="__JQUERY__/mobile/src/jquery.mobile.theme-myself.css" rel="stylesheet" >		
<link href="__JQUERY__/mobile/src/jquery.mobile.structure-1.4.5.css" rel="stylesheet">
<script src="__JQUERY__/mobile/src/jquery.mobile-1.4.5.js" type="text/javascript"></script>
<?php }else{ ?>
<link href="__JQUERY__/mobile/jquery.mobile.icons-1.4.5.min.css" rel="stylesheet" >
<link href="__JQUERY__/mobile/jquery.mobile.theme-myself.css" rel="stylesheet">		
<link href="__JQUERY__/mobile/jquery.mobile.structure-1.4.5.min.css" rel="stylesheet" >
<script src="__JQUERY__/mobile/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
<?php } ?>
<?php if(APP_DEBUG){ ?>
<script src="__JQUERY__/validate/src/jquery.validate.js" type="text/javascript"></script>
<?php }else{ ?>
<script src="__JQUERY__/validate/jquery.validate.min.js" type="text/javascript"></script>
<?php } ?>
<script src="__JQUERY__/validate/message_cn.js" type="text/javascript"></script>
<link href="__JQUERY__/validate/css/validate.css" rel="stylesheet">
<?php if(APP_DEBUG){ ?>
<script src="__JQUERY__/artDialog/src/dialog-plus.js" type="text/javascript"></script>
<?php }else{ ?>
<script src="__JQUERY__/artDialog/dialog-plus.min.js" type="text/javascript"></script>
<?php } ?>
<link href="__JQUERY__/artDialog/css/ui-dialog.css" rel="stylesheet">
		<title>登录</title>
	</head>
<body>
<div id="loginpage" data-role="page" data-theme="c"  data-position="fixed">
	<div data-role="header" data-theme="a" data-position="fixed">
	 <h1>登录</h1>
	 <a id='subscribebtn' href="<?php echo C('SUBSCRIBE_LINK');?>" data-transition="slide" data-role="button" data-theme="b" data-icon="star" data-iconpos="right" class="ui-btn-right">关注我们</a>
</div>
	<div data-role="content">
		<form id="loginform" method="post" action="<?php echo U('Scratch/Scratch/loginHandle');?>">
			<div data-role="fieldcontain">
  			<label for="username">用户名:</label>
  			<input type="text" name="username" id="username"  placeholder="请输入您的用户名">
  			</div>
  			<div data-role="fieldcontain">
  			<label for=password>密码：</label>
  			<input type="password" name="password" id="password"  placeholder="请输入您的密码">
  			</div>
  			<input type="submit" value="登陆" name="loginbtn" id="loginbtn" data-theme="e">
		</form>
		<a id="register" data-role="button" data-theme="b">注册</a>
		<p style="color: red;">公告：为了杜绝恶意抽奖现象的发生和维护广大用户的合法权益，本次抽奖活动需要登录后才可参与！如果您尚未注册，请点击注册按钮即可成为我们的会员。</p>
	</div>
</div>
<script>
$('#loginpage').bind('pageinit', function(event) {
	if((dialog = top.dialog.get(window))){
		dialog.width(320);
		dialog.height(450);
		dialog.reset();    // 重置对话框位置
	}
	$("#register").bind('click',function(){
		dialog.close("<?php echo C('REGISTER_LINK');?>"); // 关闭（隐藏）对话框
		dialog.remove();	
		return false;
	});
	$("#subscribebtn").bind('click',function(){
		
		dialog.close(document.getElementById('subscribebtn').href); // 关闭（隐藏）对话框
		dialog.remove();	
		return false;
	});
	$('#loginform').validate({
		submitHandler:function(form) {
			form.submit();
		},
		errorPlacement: function(error, element) {  
		    error.appendTo(element.parent().parent());  
		},
		onfocusout: function(element) { $(element).valid();},
		rules: {
			username: {
				required: true
			},
			password: {
				required: true
			}
		},
		 messages:  {
		username: {
			required:"请输入您的用户名"
		},
		password: {
			required:"请输入您的密码"
		}
		}	
	});
});
</script>
</body>
</html>