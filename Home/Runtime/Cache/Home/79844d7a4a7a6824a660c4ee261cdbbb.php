<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>蜗牛-个人博客</title>
        <link rel="shortcut icon" type="image/x-icon" href="/blog/Public/Images/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="/blog/Public/Css/base.css" />
        <script type="text/javascript" src="/blog/Public/Js/jquery.js"></script>

    <!--引入article.css文件-->
        <link rel="stylesheet" type="text/css" href="/blog/Public/Css/home/article.css" />
    <!--引入index.css文件-->
        <link rel="stylesheet" type="text/css" href="/blog/Public/Css/home/index.css" />
</head>
<body>
    <div class="container">
<!--页眉开始-->
    <header class="center hidden margin-top">
        <a id="logo" href="/blog"></a>
        <!--页眉导航开始-->
            <nav id="header_nav" class="right">
                <!--遍历导航-->
                <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if($nav["zhli"] == '首　　页'): ?><a href="/blog">
                <?php else: ?>
                <a href="/blog/<?php echo ($nav["path"]); ?>"><?php endif; ?>
                    <span><?php echo ($nav["zhli"]); ?></span><span><?php echo ($nav["enli"]); ?></span>
                </a><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--遍历导航结束-->
        <!--页眉导航结束-->
            </nav>
<!--页眉结束-->
    </header>
    <div id="contant" class="center clear margin-top hidden">

    <blockquote>
        <h1><?php echo ($article["title"]); ?></h1>
        <p><?php echo ($article["article"]); ?></p>
    </blockquote>
    <span class="left">分类:<a href="/blog/index.php/Home/Index/group/label/<?php echo ($article["type"]); ?>"><?php echo ($article["type"]); ?></a></span>
    <span class="right"><?php echo (date("Y-m-d h:i:s",$article["posttime"])); ?></span>
        </div>
        <hr />
    <!--菜单开始-->
        <footer class="center clear margin-top">
            <div id="flink">
                <span>友情链接:</span>
                <!--遍历友情链接-->
                <?php if(is_array($flink)): $i = 0; $__LIST__ = $flink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$flink): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo ($flink["url"]); ?>"><?php echo ($flink["webname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <p>
                Copyright &copy; 2015 www.iwnweb.com All rights reserved.
                <a target="_blank" href="http://www.miitbeian.gov.cn/">闽ICP备15003998号-1</a>
            </p>
    <!--菜单结束-->
        </footer>
        </div>
        <script type="text/javascript" src="/blog/Public/Js/index.js"></script>
        <script type="text/javascript" src="/blog/Public/Js/append.js"></script>
        <script>
        $(function(){
            var obj=null;
            var As=document.getElementById('header_nav').getElementsByTagName('a');
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