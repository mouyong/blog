<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>蜗牛-个人博客后台管理页面</title>
        <link rel="shortcut icon" type="image/x-icon" href="/snail/Public/Images/favicon.ico" />
        <script type="text/javascript" src="/snail/Public/Js/jquery.js"></script>
        <meta http-equiv="Refresh" content="3; url=/snail/Snail/Index/article" />
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="/snail/Public/Css/bootstrap.min.css"> -->
        <link rel="stylesheet" type="text/css" href="/snail/Public/Css/admin/admin.css" />
    </head>
    <body>
	<div class="container">
		<header class="navbar navbar-default navbar-fixed-top">
	<nav class="container">
		<div class="navbar-header">
			<button id="icon-bar" class="collapsed navbar-toggle" data-target="#navbar" data-toggle="collapse">
				<span class="sr-only">切换导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/snail" class="navbar-brand"><b>蜗牛--博客</b></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav nav-tabs navbar-right">
				<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if($nav["model"] == 0 && $nav["display"] == 1 ): ?><li class="center-block"><a href="/snail/<?php echo ($nav["path"]); ?>"><?php echo ($nav["zhli"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</nav>
</header>
		<section id="main">
		    <h1>
	<b>Welcome to my blog management background　:)</b>
</h1>
		</section>
	</div>
        <script src="/snail/Public/Js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/snail/Public/Js/index.js"></script>
        <script type="text/javascript" src="/snail/Public/Js/append.js"></script>
        <script>
        $(function(){
            var obj=null;
            var As=document.getElementById('navbar').getElementsByTagName('a');
            obj = As[0];
            for(i=1;i<As.length;i++){
                if(window.location.href.indexOf(As[i].href)>=0)
                obj=As[i];
            }
            obj.parentNode.className='active';
        });
        </script>
    </body>
</html>