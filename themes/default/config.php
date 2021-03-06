
<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
********************************************************************
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: Glype
* Website: http://www.glype.com/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/

// Website name
//$themeReplace['site_name'] = $_SERVER['HTTP_HOST'].' Glype&reg; proxy';
$themeReplace['site_name'] = '科学上网'.' Bitcore.top&reg; 代理';

// Meta description
$themeReplace['meta_description'] = <<<OUT
本网站是一个在线代理系统,能提高对部分国外网站的访问速度.
OUT;

// Meta keywords (separate with comma)
$themeReplace['meta_keywords'] = <<<OUT
在线代理,科学上网,代理,vpn,bitcoin
OUT;

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>竭诚为您提供轻松,便捷,免费的科学上网方式!</p>
   <p>注意: 暂时不支持视频网站</p>
OUT;

// Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT

OUT;

// Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT

OUT;

// Ad location on proxied pages below the url mini-form
$themeReplace['proxied'] = <<<OUT

OUT;
