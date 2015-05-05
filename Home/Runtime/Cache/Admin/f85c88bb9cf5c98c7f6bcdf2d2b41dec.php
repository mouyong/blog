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
		        <a href="/snail/Snail/CONTROLLER_NAME/del/id/<?php echo ($article["id"]); ?>" class="btn btn-danger">Yes</a>
		        <button class="btn btn-default" data-dismiss="modal">No</button>
		      </div>
		    </div>
		  </div>
		</div>
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
    <form action="/snail/Snail/Nav/update" method="post" class="container">
    	<table class="table">
    		<caption>Modified a Nav</caption>
			<input type="hidden" name="id" value="<?php echo ($id); ?>" />
			<tr>
				<td>
					<?php switch($navls["model"]): case "1": ?><input type="radio" name="model" value="1" id="mdho" checked /><label for="mdho">前台</label>
							<input type="radio" name="model" value="0" id="mdad" /><label for="mdad">后台</label><?php break;?>
						<?php case "0": ?><input type="radio" name="model" value="1" id="mdho" /><label for="mdho">前台</label>
							<input type="radio" name="model" value="0" id="mdad" checked /><label for="mdad">后台</label><?php break; endswitch;?>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="zhli" value="<?php echo ($navls["zhli"]); ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="enli" value="<?php echo ($navls["enli"]); ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="path" value="<?php echo ($navls["path"]); ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<?php switch($navls["display"]): case "1": ?><input type="radio" id="block" name="display" value="1" checked /><label for="block">显示</label>
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