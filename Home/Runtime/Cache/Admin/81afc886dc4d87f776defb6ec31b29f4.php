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
    	<div class="modal fade" id="warning" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-danger" id="myModalLabel">Warning</h4>
      </div>
      <div class="modal-body text-danger bg-danger">
        Are you sure to delete?
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Yes</button>
        <a href="/blog/Snail/Index/del/id/<?php echo ($article["id"]); ?>" class="btn btn-danger">No</a>
      </div>
    </div>
  </div>
</div>
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
			<a href="/blog/Snail/About/save" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th class="col-md-3">Key</th>
			<th class="col-md-3">Value</th>
			<th class="col-md-3">状　　态</th>
			<th class="col-md-3">操　　作</th>
		</tr>
		<?php if(is_array($about)): $i = 0; $__LIST__ = $about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$about): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($about["key"]); ?></td>
			<td class="summary"><?php echo (mb_substr($about["value"],0,10,'utf8')); ?></td>
			<td>
			<?php switch($about["display"]): case "1": ?>显示<?php break;?>
				<?php case "0": ?><span class="none">隐藏</span><?php break; endswitch;?>
			</td>
			<td>
				<a href="/blog/Snail/About/modify/id/<?php echo ($about["id"]); ?>" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
				<button data-toggle="modal" data-target="#warning" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
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