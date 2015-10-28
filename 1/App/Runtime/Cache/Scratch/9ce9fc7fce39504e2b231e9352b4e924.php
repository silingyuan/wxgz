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
		<title>兑奖页面</title>
	</head>
<body>
<div id="awardpage" data-role="page" data-theme="c">
	<div data-role="header" data-theme="a" data-position="fixed">
	 <h1>兑奖页面</h1>
	 <a id='subscribebtn' href="<?php echo C('SUBSCRIBE_LINK');?>" data-transition="slide" data-role="button" data-theme="b" data-icon="star" data-iconpos="right" class="ui-btn-right">关注我们</a>
</div>
	<div data-role="content">
		<form id="awardform" method="post" action="<?php echo U('Scratch/Scratch/awardHandle');?>">
			<div data-role="fieldcontain">
  			<label for="sncode">兑奖sncode:</label>
  			<input type="text" name="sncode" id="sncode"  placeholder="请输入您的兑奖sncode">
  			</div>
  			<div data-role="fieldcontain">
  			<label for="qq">QQ号码：</label>
  			<input type="number" name="qq" id="qq"  placeholder="请输入您的密码">
  			</div>
  			<input type="submit" value="兑奖" name="awardbtn" id="awardbtn" data-theme="e">
		</form>
	</div>
</div>
<script>
$('#awardpage').bind('pageinit', function(event) {
	$('#awardform').validate({
		submitHandler:function(form) {
			form.submit();
		},
		errorPlacement: function(error, element) {  
		    error.appendTo(element.parent().parent());  
		},
		onfocusout: function(element) { $(element).valid();},
		rules: {
			sncode: {
				required: true,
				remote:"<?php echo U('Scratch/Scratch/awardHandle');?>",
			},
			qq: {
				required: true
			}
		},
		 messages:  {
		sncode: {
			required:"请输入您的兑奖sncode",
			remote:"您输入的sncode有误，请核对！"
		},
		qq: {
			required:"请输入您的QQ号码"
		}
		}	
	});
});
</script>
</body>
</html>