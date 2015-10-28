<?php
return array(
		//配置常用的CSS、JS、image资源的路径
		'TMPL_PARSE_STRING'=>array(
				'__SCRATCH__'=>'/ywzg/1/App/Group/Scratch/Tpl/Scratch/public',
				'__JQUERY__'=>'/ywzg/1/Public/Jquery',
		),
		//cache配置
		'DATA_CACHE_TYPE'=>'Db',
		'DATA_CACHE_TIME'=>600,
		'DATA_CACHE_TABLE'=>'sc_cache',
		'SESSION_TYPE'=>'DB',
		'SESSION_OPTIONS'=>array(
				'expire'=>3600
		),
		'TMPL_ACTION_SUCCESS' => 'Public:jump',
		'TMPL_ACTION_ERROR' => 'Public:jump',
		//数据库配置
		'DB_TYPE'=>'mysql',   //数据库类型
		'DB_HOST'=>'127.0.0.1',    //服务器地址
		'DB_NAME'=>'scratch',    //数据库名
		'DB_USER'=>'root',       //数据库用户名
		'DB_PWD'=>'root',            //数据库密码
		'DB_PORT'=>3306,     //数据库端口
		'DB_PREFIX'=>'sc_',     //数据表前缀
		'DB_CHARSET'=>'utf8',   //字符集
		'SUBSCRIBE_LINK'=>'http://mp.weixin.qq.com/s?__biz=MzA4NzE5MTA1Mg==&mid=261405797&idx=1&sn=e864099bd06482e8e44a80d0f7e20428#rd',
		'REGISTER_LINK'=>'http://mp.weixin.qq.com/s?__biz=MzA4NzE5MTA1Mg==&mid=261405797&idx=1&sn=e864099bd06482e8e44a80d0f7e20428#rd'
		
);