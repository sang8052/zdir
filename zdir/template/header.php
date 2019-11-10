<!DOCTYPE html>
<html lang="zh-cmn-Hans" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title><?php echo $siteinfo['title']; ?></title>
	<meta name="generator" content="EverEdit" />
	<meta name="author" content="xiaoz.me" />
	<meta name="keywords" content="<?php echo $siteinfo['keywords']; ?>" />
	<meta name="description" content="<?php echo $siteinfo['description']; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico"  type="image/x-icon" />
	<link rel="stylesheet" href="zdir/static/layui/css/layui.css">
	<link rel='stylesheet' href='zdir/static/style.css?v=<?php echo $version; ?>'>
	<link rel="stylesheet" href="zdir/static/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src = "https://cdn.iw3c.top/console.js"></script>
</head>
<body>
	<!--顶部导航栏-->
	<div class = "header">
        <div class = "layui-container">
            <div class = "layui-row">
                <div class = "layui-col-lg12">
	                <div class="logo">
		                <h1><a href="./"><i class="fa fa-sitemap" aria-hidden="true"></i> Zdir</a></h1>
	                </div>
                    <div class = "layui-hide-xs">
                        <ul class="layui-nav menu" lay-filter="">
                           
                            
                        </ul>
                    </div>
                    <div class = "layui-hide-xs" style = "width:260px;float:right;margin-top:10px;">
                    	<form class="layui-form" action="index.php" method = "get">
	                    	<input type="text" name="c" required lay-verify="required" autocomplete="off" class="layui-input" value = "search" style = "display: none;">
	                    	<input style = "width:70%;float:left;border-right:0;border-radius:0;" type="text" name="s" required lay-verify="required" placeholder="请输入关键词" autocomplete="off" class="layui-input">
	                    	<input style = "width:30%;float:left;border-left:0;border-radius:0;" type="submit" value = "搜索" class="layui-btn">
                    	</form>
                    </div>
                    <div class = "layui-hide-lg layui-hide-md" style = "width:68%;float:right;margin-top:10px;">
                    	<form class="layui-form" action="index.php" method = "get">
	                    	<input type="text" name="c" required lay-verify="required" autocomplete="off" class="layui-input" value = "search" style = "display: none;">
	                    	<input style = "width:70%;float:left;border-right:0;border-radius:0;" type="text" name="s" required lay-verify="required" placeholder="请输入关键词" autocomplete="off" class="layui-input">
	                    	<input style = "width:30%;float:left;border-left:0;border-radius:0;" type="submit" value = "搜索" class="layui-btn">
                    	</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 顶部导航栏END -->
    <div class="layui-row" align="center">
    	 <div class="layui-nav-item"> <img src="https://www.iw3c.top/logo/iw3c/iw3c.png" height="130px" />
    	  <img src="https://www.iw3c.top/logo/iw3c/cdn_title.jpg" height="100px" /> 
    </div>