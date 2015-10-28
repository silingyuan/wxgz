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
		<link rel="stylesheet" href="__SCRATCH__/css/scratchStyle.css" />
		<script type="text/javascript" src="__SCRATCH__/js/wScratchPad.js"></script>	
		<title>抽奖页面</title>
	</head>
<body>
<div id="scratchpage" data-role="page" data-theme="c">
<div data-role="header" data-theme="a" data-position="fixed">
	 <h1>抽奖页面</h1>
	 <a id='subscribebtn' href="<?php echo C('SUBSCRIBE_LINK');?>" data-transition="slide" data-role="button" data-theme="b" data-icon="star" data-iconpos="right" class="ui-btn-right">关注我们</a>
</div>
<div class="activity-scratch-card-winning">
	<div class="scratch">
		<img src="__SCRATCH__/images/activity-scratch-card-bannerbg.png">
		<div id="prize" style="display:none">
			<?php echo $login?'请登录':$prize['name'];?>
		</div>
		<div id="scratchpad">
		</div>
	</div>
<?php if($prize["id"] < 7): ?><div id="zjl" style="display:none" class="boxcontent boxwhite">
	<div class="box">
		<div class="title-red">
			<span>
				恭喜您:
			</span>
		</div>
		<div class="Detail">
			<p>您获得了：<span class="red"><?php echo ($prize['name']); ?>（<?php echo ($prize['content']); ?>）</span></p>
			<p>兑奖SN码：
				<span class="red" id="sncode">
					<?php echo implode(str_split($prize['sncode'],5),"-");?>
				</span>
			</p>
			<p>兑奖流程：长摁复制上方<span class="red">兑奖SN码</span>，然点击下方进行兑奖</p>
			<a data-role="button" data-theme="b" href="#transmit">陛下点这里兑奖</a>
		</div>
	</div>
</div>

<?php else: ?>
<div id="zjl" style="display:none" class="boxcontent boxwhite">
<div class="box">
	<div class="title-orange">
		<span>
			很抱歉：
		</span>
	</div>
	<div class="Detail">
		<p>你本次抽奖没有获得Q币，快快点击下方的<span class="red">再抽一次</span>来试试运气吧</p>
 		<a data-role="button" data-theme="b" data-rel="external" data-ajax="false" href="<?php echo U('Scratch/Scratch/index','','html','',TRUE);?>">再抽一次</a>
			</div>
		</div>
	</div><?php endif; ?>
	<div class="boxcontent boxwhite">
		<div class="box">
			<div class="title-green">
				<span>奖项设置：</span>
			</div>
			<div class="Detail">
				<table>
					<tr>
						<th>奖项</th><th>奖励</th><th>总数</th>
					</tr>
					<?php if(is_array($prize_arr)): foreach($prize_arr as $key=>$prizeArr): ?><tr>
							<td><?php echo ($prizeArr["name"]); ?></td><td><?php echo ($prizeArr["content"]); ?></td><td><?php echo ($prizeArr["v"]); ?></td>
						</tr><?php endforeach; endif; ?>
				</table>
			</div>
		</div>
	</div>
	<div class="boxcontent boxwhite">
		<div class="box">
			<div class="title-brown">
				活动说明：
			</div>
			<div class="Detail">
				<span style="color: red">
					欢迎您！尊敬的<?php echo session('?username')?'会员':'临时';?>用户<?php echo session('username');?>！<br>
					本次活动总共可以刮2次,您还有<?php echo ($scratch['times']?$scratch['times']:'2'); ?>次机会,如果没用完重新进入本页面可以再刮!祝您好运哦！
				</span>
			</div>
		</div>
	</div>
</div>
</div>
<div data-role="page" id="transmit">
<img alt="" src="__SCRATCH__/images/zf2.png" style="width: 100%;height: 100%">
</div>
<script type="text/javascript">
$('#scratchpage').bind('pageinit', function(event) {
	var num = 0;
	var goon = true;
	$("#scratchpad").wScratchPad({
		width: 150,
		height: 40,
		color: "#a9a9a7",
		scratchMove: function() {
			num++;
			if("<?php echo ($login); ?>"){
				if(num==3){
				top.dialog({
					padding:5,
					url: "<?php echo U('Scratch/Scratch/login','','html','',TRUE);?>",
					onclose: function () {
						if (this.returnValue) {
							location.href = this.returnValue;
						}
					},
					
				}).showModal();
				}
			}else if (num > 10 && goon) {						
				goon = false;							
				$("#zjl").slideToggle(500);
			}
		}
	});
	$("#prize").slideToggle(10);
});

$("#transmit").bind('pageinit',function(event){
	setTimeout(function(){
		location.href="<?php echo U('Scratch/Scratch/getAward','','html','',TRUE);?>";
	},6125);
});
</script>
</body>
</html>