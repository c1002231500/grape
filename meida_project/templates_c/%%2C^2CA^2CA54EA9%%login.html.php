<?php /* Smarty version 2.6.26, created on 2011-08-25 15:10:30
         compiled from admin/login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>管理员登陆页面</title>
<meta name="keywords" content="管理员登陆页面，产品维护、信息维护、权限维护"/>
<meta name="description" content="管理员登陆页面，产品维护、信息维护、权限维护"/>


<!-- import css and javascript -->
<link href="templates/Content/css/login.css" rel="stylesheet"	type="text/css">
<script type="text/javascript" src="templates/Content/js/md5.js"></script>
<script type="text/javascript" src="templates/Content/js/login.js"></script>

<script type="text/javascript">
if (top.location != self.location){top.location=self.location;}
</script> 

</head>

<body>
<!-- login page information //by falcon -->
<div id="login">
	<div class="warp">
    	<div class="content">
            <h1></h1>
            <form  name="login" action="/admin.php?login=pass" method="post">
                  <input type="hidden" value="login" name="action" id="action" />
                <div class="item"><div class="input"><div class="icon" title="用户名"></div><input tabindex="1" id="user" name="user" type="text"></div><label>用户名：</label></div>
                <div class="item"><div class="input"><div class="icon2" title="密码"></div><input value="" tabindex="2" id="pwd" name="pwd" type="password"></div><label>密码：</label></div>
                <input tabindex="3" value="" class="submit" type="submit">
            </form>
            <p class="copyright"></p>
        </div>   
    </div>
</div>

</body>
</html>