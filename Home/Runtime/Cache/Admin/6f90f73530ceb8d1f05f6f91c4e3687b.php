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
			<a href="/blog" class="navbar-brand"><b>蜗牛--博客</b></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav nav-tabs navbar-right">
				<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if($nav["model"] == 0 && $nav["display"] == 1 ): ?><li class="center-block"><a href="/blog/<?php echo ($nav["path"]); ?>"><?php echo ($nav["zhli"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</nav>
</header>
		<section id="main">
			<a href="/blog/Snail/Label/save" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th class="col-md-3">标签云</th>
			<th class="col-md-3">标签</th>
			<th class="col-md-3">状态</th>
			<th class="col-md-3">操作</th>
		</tr>
		<?php if(is_array($label)): $i = 0; $__LIST__ = $label;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$label): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($label["labels"]); ?></td>
			<td><?php echo ($label["label"]); ?></td>
			<td>
			<?php switch($label["display"]): case "1": ?>显示<?php break;?>
				<?php case "0": ?><span class="none">隐藏</span><?php break; endswitch;?>
			</td>
			<td>
				<a href="/blog/Snail/Label/modify/id/<?php echo ($label["id"]); ?>" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
				<a href="/blog/Snail/Label/del/id/<?php echo ($label["id"]); ?>" class="btn btn-danger" onclick="return confirm('真的要删除吗?此操作不可恢复!')"><span class="glyphicon glyphicon-remove"></span></a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</div>
		</section>
	</div>
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