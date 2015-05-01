<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>蜗牛-个人博客后台管理页面</title>
        <link rel="shortcut icon" type="image/x-icon" href="/blog/Public/Images/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="/blog/Public/Css/base.css" />
        <link rel="stylesheet" type="text/css" href="/blog/Public/Css/admin/index.css" />
        <script type="text/javascript" src="/blog/Public/Js/jquery.js"></script>
    </head>
    <body>
    <div class="container">

    <div id="wrapper">
<span class="rotate"><a href="/blog" target="_blank">网　　站</a></span>
<span class="rotate"><a href="/blog/Snail">首　　页</a></span>
    <div id="wrapper_nav">
    <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if($nav["model"] == 0 && $nav["display"] == 1 ): ?><a href="/blog/<?php echo ($nav["path"]); ?>"><span><?php echo ($nav["zhli"]); ?></span></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<div id="content">
    <a href="/blog/Snail/Flink/save">添加友链</a>
	<table>
		<tr>
			<th>网站名称</th>
			<th>U R L 　</th>
			<th>状　　态</th>
			<th>操　　作</th>
		</tr>
		<?php if(is_array($flink)): $i = 0; $__LIST__ = $flink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$flink): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($flink["webname"]); ?></td>
			<td><?php echo ($flink["url"]); ?></td>
			<td>
			<?php switch($flink["display"]): case "1": ?>显示<?php break;?>
				<?php case "0": ?><span class="ad">隐藏</span><?php break; endswitch;?>
			</td>
			<td>
				<a href="/blog/Snail/Flink/modify/id/<?php echo ($flink["id"]); ?>">修改</a>
				<a href="/blog/Snail/Flink/del/id/<?php echo ($flink["id"]); ?>" onclick="return confirm('真的要删除吗?此操作不可恢复!')">删除</a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>

	</div>
    </div>
    <script type="text/javascript" src="/blog/Public/Js/index.js"></script>
        <script type="text/javascript" src="/blog/Public/Js/append.js"></script>
        <script>
        $(function(){
            var obj=null;
            var As=document.getElementById('wrapper_nav').getElementsByTagName('a');
            obj = As[0];
            for(i=1;i<As.length;i++){
                if(window.location.href.indexOf(As[i].href)>=0)
                obj=As[i];
            }
            obj.id='selected';
        });
        </script>
    </body>
</html>