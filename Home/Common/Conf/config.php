<?php
return array(
	//'配置项' => '配置值'
    'SHOW_PAGE_TRACE' => true,//开启页面TRACE
	'TMPL_L_DELIM' => '<{',//修改左定界符
	'TMPL_R_DELIM' => '}>',//修改右定界符
    'DB_DSN' => 'mysql://root:@localhost:3306/blog#utf8',//连接数据
	// 'DB_DSN' => 'mysql://qdm121925168:jiandanai@qdm121925168.my3w.com:3306/qdm121925168_db#utf8',
	'DB_PREFIX' => 'snail_',//数据库表前缀
	'URL_ROUTER_ON' => true,
	'URL_ROUTER_RULES' => array(
			//'a' => 'Index/about',
		),
	'URL_HTML_SUFFIX' => '',//将默认的html后缀修改为空
	'URL_MODULE_MAP' => array('snail' => 'admin'),
	'TMPL_EXCEPTION_FILE' => APP_PATH.'/Public/exception.tpl',
	'LOG_RECORD' => true,
	'SHOW_ERROR_MSG' => true,
	);
