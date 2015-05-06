<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>蜗牛-个人博客后台管理页面</title>
        <link rel="shortcut icon" type="image/x-icon" href="/snail/Public/Images/favicon.ico" />
        <script type="text/javascript" src="/snail/Public/Js/jquery.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="/snail/Public/Css/bootstrap.min.css"> -->
        <link rel="stylesheet" type="text/css" href="/snail/Public/Css/admin/login.css" />
        <link rel="stylesheet" type="text/css" href="/snail/Public/Css/admin/admin.css" />
    </head>
    <body>
	<div class="container">
      <form action="/snail/index.php/snail/Login/signin" method="post" class="signin">
        <h2>Please sign in</h2>
        <input type="text" name="username" class="form-control login-input" placeholder="UserName" required autofocus>
        <input type="password" name="password" class="form-control login-input" placeholder="PassWord" required>
        <button id="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
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