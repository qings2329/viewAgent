<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2015 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
*******************************************************************
* Our settings file. Self-explanatory - stores the config values.
*******************************************************************
* This file has been automatically generated by the glype admin tool.
* For a more complete and thorough explanation of options, consult
* the original settings.php file from the glype package.
******************************************************************/


/*****************************************************************
* 特殊选项
******************************************************************/

# ##
$CONFIG['license_key'] = '';

# ##
$CONFIG['enable_blockscript'] = false;


/*****************************************************************
* 安装选择
******************************************************************/

# ##
$CONFIG['theme'] = 'default';

# ##
$CONFIG['plugins'] = 'msn.com,twitter.com,hotmail.com,youtube.com,live.com,myspace.com,yahoo.com,ytimg.com,google.com,facebook.com';

# 
$CONFIG['tmp_dir'] = GLYPE_ROOT . '/tmp/';

# ##
$CONFIG['gzip_return'] = false;

# ##
$CONFIG['ssl_warning'] = true;

# ##
$CONFIG['override_javascript'] = false;

# 
$CONFIG['load_limit'] = 0;

# ## </body> .
$CONFIG['footer_include'] = '';


/*****************************************************************
* URL编码选项
******************************************************************/

# ##
$CONFIG['path_info_urls'] = false;


/*****************************************************************
* 直接链接
******************************************************************/

# ##
$CONFIG['stop_hotlinking'] = true;

# ###
$CONFIG['hotlink_domains'] = array();


/*****************************************************************
* 登录
******************************************************************/

# ##.
$CONFIG['enable_logging'] = true;

# ##
$CONFIG['logging_destination'] = $CONFIG['tmp_dir'] . 'logs/';

# ##.
$CONFIG['log_all'] = false;


/*****************************************************************
* 网站访问控制
******************************************************************/

# ##
$CONFIG['whitelist'] = array();

# ##
$CONFIG['blacklist'] = array();


/*****************************************************************
* 用户访问控制
******************************************************************/

# 
$CONFIG['ip_bans'] = array();


/*****************************************************************
* 传输选项
******************************************************************/

# ##
$CONFIG['connection_timeout'] = 10;

# ##
$CONFIG['transfer_timeout'] = 0;

# .
$CONFIG['max_filesize'] = 0;

# ###
$CONFIG['download_speed_limit'] = 0;

# ##.
$CONFIG['resume_transfers'] = false;

# ###.
$CONFIG['queue_transfers'] = true;


/*****************************************************************
* Cookies
******************************************************************/

# ##.
$CONFIG['cookies_on_server'] = false;

# ###
$CONFIG['cookies_folder'] = $CONFIG['tmp_dir'] . 'cookies/';

# ###.
$CONFIG['encode_cookies'] = false;


/*****************************************************************
* 维护
******************************************************************/

# ###
$CONFIG['tmp_cleanup_interval'] = 0;

# ###.
$CONFIG['tmp_cleanup_logs'] = 0;


/*****************************************************************
* 用户可配置的选项
******************************************************************/

$CONFIG['options']['encodeURL'] = array(
	'title'	 => '加密 URL',
	'desc'	 => '加密你所查看的页面的URL',
	'default' => true,
	'force'	 => false
);

$CONFIG['options']['encodePage'] = array(
	'title'	 => '加密网页',
	'desc'	 => '有助于避免过滤器通过加密和解密网页发送前用JavaScript曾经收到。',
	'default' => false,
	'force'	 => false
);

$CONFIG['options']['showForm'] = array(
	'title'	 => '显示形式',
	'desc'	 => '提供了一个迷你的形式在每一页的顶部，让你快速跳转到另一个网站，而不返回到我们的主页。',
	'default' => true,
	'force'	 => true
);

$CONFIG['options']['allowCookies'] = array(
	'title'	 => '允许 Cookies',
	'desc'	 => '是否运行使用Cookies！默认是允许的',
	'default' => true,
	'force'	 => false
);

$CONFIG['options']['tempCookies'] = array(
	'title'	 => '重新编写 Cookies',
	'desc'	 => '这个选择将会重写所有Cookies重新编写！当您关闭浏览器将删除Cookies！. (推荐)',
	'default' => true,
	'force'	 => true
);

$CONFIG['options']['stripTitle'] = array(
	'title'	 => '删除页面标题',
	'desc'	 => '从代理删除标题页。',
	'default' => false,
	'force'	 => true
);

$CONFIG['options']['stripJS'] = array(
	'title'	 => '删除脚本',
	'desc'	 => '删除脚本来保护你的匿名性,加快页面加载。然而,并不是所有的网站都将提供一个HTML-only选择。(推荐)',
	'default' => false,
	'force'	 => false
);

$CONFIG['options']['stripObjects'] = array(
	'title'	 => '删除对象',
	'desc'	 => '你可以增加页面加载时间通过删除不必要的Flash,Java和其他对象。如果不删除,这些也可能损害你的匿名性。',
	'default' => false,
	'force'	 => false
);


/*****************************************************************
* Do not edit this section manually!
******************************************************************/

# Settings file version for determining compatibility with admin
# tool.
$CONFIG['version'] = '1.4.15';

//---PRESERVE ME---
// Anything below this line will be preserved when the admin control panel rewrites
// the settings. Useful for storing settings that don't/can't be changed from the control panel











$adminDetails['admin'] = '2f3b1e7435788ded8ddcfc5c782e7e80';
