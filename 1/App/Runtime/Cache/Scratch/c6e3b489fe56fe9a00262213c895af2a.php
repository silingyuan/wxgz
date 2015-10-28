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
		<title>提示信息</title>
	</head>
<body>
<div id="loginpage" data-role="page" data-theme="c">
	<div data-role="header" data-theme="a" data-position="fixed">
	 <h1>提示框</h1>
	 <a id='subscribebtn' href="<?php echo C('SUBSCRIBE_LINK');?>" data-transition="slide" data-role="button" data-theme="b" data-icon="star" data-iconpos="right" class="ui-btn-right">关注我们</a>
</div>
	<div data-role="content">
		<?php if(isset($message)) {?>
		<div><?php echo($message['content']); ?></div>
		<p>等待： <b id="wait"><?php echo($waitSecond); ?></b>S后，将自动跳转至<?php echo $message['next']?></p>
		<a  data-role="button" id="href" data-theme="e">点击跳转到<?php echo $message['next']?></a>
		<script type="text/javascript">
		(function(){
			if((dialog = top.dialog.get(window))){
				dialog.width(320);
				dialog.height(100);
				dialog.reset();    // 重置对话框位置
			}
		var wait = document.getElementById('wait'),href ="<?php echo ($jumpUrl); ?>";
		var interval = setInterval(function(){
			var time = --wait.innerHTML;
			if(time <= 0) {
				dialog.close(href); // 关闭（隐藏）对话框
				dialog.remove();	
				clearInterval(interval);
				return false;
			};
		}, 1000);
		$("#href").bind('click',function(){
			dialog.close(href); // 关闭（隐藏）对话框
			dialog.remove();	
			return false;
		});
		})();
		</script>
		<?php }else{?>
		<div><?php echo($error['content']); ?></div>
		<p>等待： <b id="wait"><?php echo($waitSecond); ?></b>S后，将自动跳转至<?php echo $error['back']?></p>
		<a data-rel="external" data-role="button" id="href" href="<?php echo($jumpUrl); ?>" data-rel="external" data-ajax="false" data-theme="e">点击返回到<?php echo $error['back']?></a>
		<script type="text/javascript">
		(function(){
			if((dialog = top.dialog.get(window))){
				dialog.width(320);
				dialog.height(100);
				dialog.reset();    // 重置对话框位置
			}
		var wait = document.getElementById('wait'),href = document.getElementById('href').href;
		var interval = setInterval(function(){
			var time = --wait.innerHTML;
			if(time <= 0) {
				location.href = href;
				clearInterval(interval);
			};
		}, 1000);
		})();
		</script>
		<?php }?>
	<script type="text/javascript">
$("#subscribebtn").bind('click',function(){		
		dialog.close(document.getElementById('subscribebtn').href); // 关闭（隐藏）对话框
		dialog.remove();	
		return false;
	});
	</script>
	<p style="color: red;">公告：为了杜绝恶意抽奖现象的发生和维护广大用户的合法权益，本次抽奖活动需要登录后才可参与！如果您尚未注册，请点击注册按钮即可成为我们的会员。</p>
	</div>
</div>
</body>
</html>