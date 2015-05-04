<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>蜗牛-个人博客</title>
        <link rel="shortcut icon" type="image/x-icon" href="/blog/Public/Images/favicon.ico" />
        <script type="text/javascript" src="/blog/Public/Js/jquery.js"></script>
		<link rel="stylesheet" href="/blog/Public/Css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/blog/Public/Css/home/index.css" />
        <link rel="stylesheet" type="text/css" href="/blog/Public/Css/home/animation.css" />
    </head>
    <body>
    <header class="navbar navbar-default navbar-fixed-top">
	    <div class="row">
			<nav class="container">
				<div class="navbar-header">
					<button id="icon-bar" class="collapsed navbar-toggle" data-target="#navbar" data-toggle="collapse">
						<span class="sr-only">切换导航</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="/blog" class="navbar-brand"><b>蜗牛--博客</b></a>
					<div style="width: 16.5rem;overflow: hidden;display: inline-block">
						<iframe style="margin-top: 0.5rem;" allowtransparency="true" frameborder="0" width="180" height="36" scrolling="no" src="http://tianqi.2345.com/plugin/widget/index.htm?s=3&z=2&t=0&v=0&d=3&bd=0&k=000000&f=&q=1&e=1&a=1&c=54511&w=180&h=36&align=center"></iframe>
					</div>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav nav-pills navbar-right">
					<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><li>
							<?php if($nav["zhli"] == '首　　页'): ?><a href="/blog">
									<span class="glyphicon glyphicon-home"></span>
							<?php else: ?>
				                <a href="/blog/<?php echo ($nav["path"]); ?>">
				                	<span>&nbsp;&nbsp;&nbsp;</span><?php endif; ?>
					                <span><?php echo ($nav["zhli"]); ?></span><span style="text-align: center;"><?php echo ($nav["enli"]); ?></span>
								</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</nav>
		</div>
	</header>
    <div class="container">
        <div class="row">
    		<section class="col-md-8">
    			<div class="left">
    <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><article class="panel panel-info">
	<header class="panel-heading">
		<a href="/blog/Home/Index/article/id/<?php echo ($article["id"]); ?>" style="display: block;"><span class="glyphicon glyphicon-paperclip"></span><?php echo ($article["title"]); ?></a>
	</header>
	<div class="panel-body summary"><?php echo (stristr($article["article"], '</p>', true)); ?></div>
	<footer class="panel-footer">
	    分类:<a href="/blog/Home/Index/group/label/<?php echo ($article["type"]); ?>" class="rotate"><?php echo ($article["type"]); ?></a>
	    <span class="pull-right"><?php echo (date("Y-m-d h:i:s",$article["posttime"])); ?></span>
	</footer>
	</article><?php endforeach; endif; else: echo "" ;endif; ?>
    
</div>

    		</section>
            <aside class="col-md-3 col-md-offset-1">
                <div class=" panel panel-info">
    <p class="text-center panel-heading">标签云</p>
    <div class="panel-body">
        <?php if(is_array($label)): $i = 0; $__LIST__ = $label;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$label): $mod = ($i % 2 );++$i;?><span class="text-center rotate"><a href="/blog/Home/Index/group/label/<?php echo ($label["label"]); ?>"><?php echo ($label["labels"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

            </aside>
    	</div>
    </div>
        <hr />
    <!--菜单开始-->
        <footer class="container text-center">
            <div class="row">
                <span>友情链接:</span>
                <!--遍历友情链接-->
                <?php if(is_array($flink)): $i = 0; $__LIST__ = $flink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$flink): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo ($flink["url"]); ?>"><?php echo ($flink["webname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                <p>
                    Copyright &copy; 2015 www.iwnweb.com All rights reserved.
                    <a target="_blank" href="http://www.miitbeian.gov.cn/">闽ICP备15003998号-1</a>
                </p>
        <!--菜单结束-->
            </div>
        </footer>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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