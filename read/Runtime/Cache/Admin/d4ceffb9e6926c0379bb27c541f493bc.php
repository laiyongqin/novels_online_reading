<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户验证</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/read/reset-min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/read/common.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/read/login.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript">
$(function(){
    //判断用户名输入合法性
    $("#userName").click(function(){
        if($("#uhint").text()){
            $("#uhint").hide();
        }
    })
    $("#userName").blur(function(){
      if(!$(this).val()){
        $("#uhint").show();
      }     
    })
  
    //判断密码输入合法性
  $("#userPass").click(function(){
        if($("#phint").text()){
            $("#phint").hide();
        }
    })
  $("#userPass").blur(function(){
    if(!$(this).val()){
      $("#phint").show();
    }     
  })

  //表单提交检测
  $("#subbtn").click(function(){
    if(!$("#userName").val()){
      $("#uhint").text("请输入帐号")
    }
    else if(!$("#userPass").val()){
      $("#phint").text("请输入密码")
    }
    else {
      document.form1.submit();
    }
  })

})
</script>
</head>

<body>
<div class="head">
  <div class="navigation">
      <h1 class="logo"><a href="/" title="小说阅读网"> 小说阅读网 </a></h1>
        <div class="link-to-book-store"><a href="/store/"> 更多小说作品 </a></div>
        <div class="session">
          <a href="http://www.douban.com/people/48661946/" target="_blank"> #铁王 </a>
            <a class="log-out" href="/logout?ck=awBr"> [退出] </a>
            
            </div>
    </div>
</div>

<div class="login">
  <div class="cont"> </div>
    <div class="login_main">
      <form name="form1" class="loginform" action="" method="post"  > 
          <ul class="login_list">
              <li class="login_input">
                    <label id="uhint" for="userName" class="txt_default ">帐号：</label>
            <input value="" id="userName" name="userName" tabindex="2" class="input_txt" type="text">
        </li>
                
                <li class="login_input">
                    <label id="phint" for="userPass" class="txt_default" style="">密码：</label>
            <input value="" id="userPass" name="userPass" tabindex="2" class="input_txt" type="password">
        </li>
                
                <li><button type="button" class="login_btn" tabindex="5" id="subbtn" value="登录">登录</button></li>
            </ul>
        </form>
    </div>


</div>
























<div class="footer">
  <p class="copyright"> © 2005 - 2012 douban.com, all rights reserved. </p>
    <ul class="footer-nav">
      <li><a href="/contact"> 联系我们 </a></li><li><a href="/copyright"> 版权声明 </a></li>
        <li><a href="http://book.douban.com/help/ask?type=39"> 使用反馈 </a></li>
    </ul>
</div>
</body>
</html>