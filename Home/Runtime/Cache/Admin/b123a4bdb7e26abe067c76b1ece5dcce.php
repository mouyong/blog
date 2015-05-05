<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>蜗牛-个人博客后台管理页面</title>
        <link rel="shortcut icon" type="image/x-icon" href="/snail/Public/Images/favicon.ico" />
        <script type="text/javascript" src="/snail/Public/Js/jquery.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="/snail/Public/Css/bootstrap.min.css"> -->
        <link rel="stylesheet" type="text/css" href="/snail/Public/Css/admin/admin.css" />
    </head>
    <body>
    
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>蜗牛-个人博客后台管理页面</title>
        <link rel="shortcut icon" type="image/x-icon" href="/snail/Public/Images/favicon.ico" />
        <script type="text/javascript" src="/snail/Public/Js/jquery.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="/snail/Public/Css/bootstrap.min.css"> -->
        <link rel="stylesheet" type="text/css" href="/snail/Public/Css/admin/admin.css" />
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
			<a href="/snail" class="navbar-brand"><b>蜗牛--博客</b></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav nav-tabs navbar-right">
				<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if($nav["model"] == 0 && $nav["display"] == 1 ): ?><li class="center-block"><a href="/snail/<?php echo ($nav["path"]); ?>"><?php echo ($nav["zhli"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</nav>
</header>
	<form action="/snail/Snail/<?php echo CONTROLLER_NAME ;?>/update" method="post" class="container">
		<table class="table">
    		<caption>Modified an Article</caption>
			<input type="hidden" name="id" value="<?php echo ($id); ?>" />
			<tr>
				<td>
					<input type="text" name="title" value="<?php echo ($article["title"]); ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<?php switch($article["type"]): case "blog": ?><input type="radio" name="type" value="blog" id="blog" checked /><label for="blog">Blog</label>
							<input type="radio" name="type" value="left" id="left" /><label for="left">Left</label><?php break;?>
					    <?php case "left": ?><input type="radio" name="type" value="blog" id="blog" /><label for="blog">Blog</label>
					     	<input type="radio" name="type" value="left" id="left" checked /><label for="left">Left</label><?php break; endswitch;?>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="label" value="<?php echo ($article["label"]); ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<script id="ueditor" name="article" type="text/plain"><?php echo ($article["article"]); ?></script>
					<script type="text/javascript" charset="utf-8" src="/snail/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/snail/Public/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/snail/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<!-- 加载编辑器的容器 -->
<script id="ueditor" name="content" type="text/plain"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
  var ue = UE.getEditor('ueditor');
</script>
				</td>
			</tr>
			<tr>
				<td>
					<?php switch($article["display"]): case "1": ?><input type="radio" id="block" name="display" value="1" checked /><label for="block">显示</label>
							<input type="radio" id="none" name="display" value="0" /><label for="none">隐藏</label><?php break;?>
						<?php case "0": ?><input type="radio" id="block" name="display" value="1" /><label for="block">显示</label>
							<input type="radio" id="none" name="display" value="0" checked /><label for="none">隐藏</label><?php break; endswitch;?>
				</td>
			</tr>
		</table>
		    <input type="submit" value="Modified" />
	</form>
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