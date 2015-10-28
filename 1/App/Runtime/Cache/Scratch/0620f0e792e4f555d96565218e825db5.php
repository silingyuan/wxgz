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
		<title>明天再来</title>
	</head>
<body>
<div id="tomorrowpage" data-role="page" data-theme="c" data-position="fixed">
<div data-role="header" data-theme="a" data-position="fixed">
	 <h1>明天再来</h1>
	 <a id='subscribebtn' href="<?php echo C('SUBSCRIBE_LINK');?>" data-transition="slide" data-role="button" data-theme="b" data-icon="star" data-iconpos="right" class="ui-btn-right">关注我们</a>
</div>
<div data-role="content">
尊敬的会员用户，您今天的抽奖次数已经用完，请明天再来吧！
</div>
</div>
</body>
</html>