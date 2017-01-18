<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网址大全</title>
<link rel="stylesheet" type="text/css" href="{$command}/css/style.css"/>
<script type="text/javascript" src="{$command}/js/js.js"></script>
</head>
<body>
<div id="top"> </div>
<form id="login" name="login" action="admin.php" method="post">
  <div id="center">
    <div id="center_left"></div>
    <div id="center_middle">
      <div class="user">
        <label>用户名：
        <input type="text" name="user" id="user" />
        </label>
        <input type="hidden" value="login" name="action" id="action" />
      </div>
      <div class="user">
        <label>密　码：
        <input type="password" name="pwd" id="pwd" />
        </label>
      </div>
      <div class="chknumber">
        <label>验证码：
        <input name="chknumber" type="text" id="chknumber" maxlength="4" class="chknumber_input" />
        </label>
        <img src="images/checkcode.png" id="safecode" />
      </div>
    </div>
    <div id="center_middle_right"></div>
    <div id="center_submit">
      <div class="button"> <img src="{$command}/images/dl.gif" width="57" height="20" onclick="form_submit()" > </div>
      <div class="button"> <img src="{$command}/images/cz.gif" width="57" height="20" onclick="form_reset()"> </div>
    </div>
    <div id="center_right"></div>
  </div>
</form>
<div id="footer"></div>
</body>
</html>
