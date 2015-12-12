<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">	
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>guitar/base.css" />	
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>guitar/pages.css" />
	<script type="text/javascript" src="<?php echo JS_PATH;?>guitar/jquery1.8.2.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>guitar/jquery.cookie.js"></script>	
</head>
<body>
<div class="to_top">
	<a id="erweima" class="active" href="javascript:;"></a>
	<a id="to_top" href="#top"></a>
	<img id="sy_ewm" src="<?php echo IMG_PATH;?>guitar/sy_erweima.png" alt="首页二维码">
</div>
<div class="header">
	<div class="content clearfix">
		<h1 id="logo" class="logo pt12 fl"><strong><a href="http://www.omguitar.cn">OM<span class="main_word_color">Guitar</span></a></strong></h1>
		<p class="slogan fl">学吉他就要那么酷</p>
		<ul class="nav fl">
			<li><a class="active" href="http://www.omguitar.cn">首页</a></li>
			<li><a href="http://www.omguitar.cn/index.php?m=content&c=index&a=lists&catid=9">作品</a></li>
			<li><a href="giutar_teather_list.html">吉他老师</a></li>
			<li><a href="html/chord/chorda">和弦速查</a></li>
		</ul>
		<div class="fr mt25"><img class="qq_icon_sp mt3" src="<?php echo IMG_PATH;?>guitar/qq.png" alt=""><span class="f14 normal_color">群：315832723</span></div>
	</div>
</div>