<?php
	$siteinfo = array(
		"title"		=>	"ZDIR魔改版",
		"keywords"	=>	"ZDIR魔改版",
		"description"	=>	"由开源 php 程序 zdir 修改..."
	);
	$loaddir = __DIR__."/../";

	//需要忽略的目录
	$ignore	= array(
		"zdir",
	
	);
	//设置IP与密码
	$config = array(
		"allowip"	=>	array(
			"0.0.0.0",			//注意设置为0.0.0.0则不限制IP，更多说明请参考帮助文档：https://doc.xiaoz.me/#/zdir/
			"::1",
			"127.0.0.1",
			"192.168.1."
		),
		"password"	=>	"",
		"auth"		=>	FALSE
	);	
?>