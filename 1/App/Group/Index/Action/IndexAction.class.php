<?php
	Class IndexAction extends Action{
		public function index(){
			echo U('Index/Index/handle','','html','',TRUE);

			$data = httpRequest(U('Index/Index/handle','','','',TRUE), array('name'=>'caiknife', 'email'=>'caiknife@gmail.com'));
			print_r($data);
		}
		public function handle(){
			if(IS_POST){echo 'post'.$_POST['name'];}
			if(IS_GET){echo 'get'.$_GET['name'];}
		}
	}
?>
