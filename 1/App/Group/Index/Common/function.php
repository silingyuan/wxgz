<?php
function httpRequest($url,$params=array(),$method='get'){
	if(trim($url)==''||!in_array($method,array('get','post'))||!is_array($params)){
		return false;
	}
	switch($method){
		case 'get':
			$str='?';
			foreach($params as $k=>$v){
				$str.=$k.'='.$v.'&';
			}
       	$str=substr($str,0,-1);
	     $url.=$str;
	      echo $url;
	     $result = file_get_contents($url);
      break;
		case 'post':
			$options = array(
					'http' => array(
							'method' => 'POST',
							'content' => http_build_query($params),
					),
			);	
			$result = file_get_contents($url, false, stream_context_create($options));
		break;
	}
	return $result;
}