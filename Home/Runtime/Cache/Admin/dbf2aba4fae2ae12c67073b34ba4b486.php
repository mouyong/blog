<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>蜗牛-个人博客后台管理页面</title>
        <link rel="shortcut icon" type="image/x-icon" href="/blog/Public/Images/favicon.ico" />
        <script type="text/javascript" src="/blog/Public/Js/jquery.js"></script>
        <link rel="stylesheet" href="/blog/Public/Css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/blog/Public/Css/admin/admin.css" />
    </head>
    <body>
    <header class="navbar navbar-default navbar-fixed-top">
	<nav class="container">
		<div class="navbar-header">
			<button id="icon-bar" class="collapsed navbar-toggle" data-target="#navbar" data-toggle="collapse">
				<span class="sr-only">切换导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/blog" class="navbar-brand"><b>蜗牛--博客</b></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav nav-tabs navbar-right">
				<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if($nav["model"] == 0 && $nav["display"] == 1 ): ?><li class="center-block"><a href="/blog/<?php echo ($nav["path"]); ?>"><?php echo ($nav["zhli"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</nav>
</header>
	<form action="/blog/Snail/Nav/add" method="post" class="container">
		<table class="table">
			<caption>Add a new Nav</caption>
			<tr>
				<td>
					<input type="radio" name="model" value="1" id="mdho" /><label for="mdho">前台</label>
					<input type="radio" name="model" value="0" id="mdad" /><label for="mdad">后台</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="zhli" placeholder="Zhli" />
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="enli" placeholder="Ehli" />
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="path" placeholder="Path" />
				</td>
			</tr>
			<tr>
				<td>
					<input type="radio" id="block" name="display" value="1" checked /><label for="block">显示</label>
					<input type="radio" id="none" name="display" value="0" /><label for="none">隐藏</label>
				</td>
			</tr>
		 </table>
			 <input type="submit" value="Add" />
	</form>
        <script src="/blog/Public/Js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/blog/Public/Js/index.js"></script>
        <script type="text/javascript" src="/blog/Public/Js/append.js"></script>
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