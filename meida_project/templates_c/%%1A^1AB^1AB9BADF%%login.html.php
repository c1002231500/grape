<?php /* Smarty version 2.6.26, created on 2011-08-27 02:06:15
         compiled from login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login and register
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['public']; ?>
Public/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['public']; ?>
Public/css/login.css"/>
<style type="text/css">
#loginreg input{
	padding-top:6px;
	width:200px; height:24px;
}
</style>
</head>

<body>
<div id="con">
    <div id="content" style="background: #d7d7d7">

        <div style="width: 1038px;margin:0 auto; background: url(<?php echo $this->_tpl_vars['public']; ?>
images/bs.jpg) repeat-y">
    	<div id="center"  style="background: #ffffff">
            <div id="head" style="width:1004px; height: 250px;padding-left: 4px;">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        	<div id="loginreg">
                <table width="952" border="0" style="position: relative; top:100px;">
                	<tr>
                    	<td width="450" style="text-align:right; vertical-align:top">
                        <form id="loginform" action="/index.php?action=userlogin" method="post">
                        <table width="254" height="161" border="0" align="right">
                        	<tr><td height="42" style="text-align: left"><input type="text" id="username" name="username"   /></td></tr>
							<tr><td height="48" style="text-align: left"><input type="password" id="password" name="password"   /></td></tr>
		                   <tr><td height="61"  style="text-align: left">
                           <img id="loginsub" src="<?php echo $this->_tpl_vars['public']; ?>
Public/images/logins.gif" style="cursor: pointer">
	                      </td></tr>
                        </table>
                        </form>
                        </td>
                        <td width="516">
                        <form id="reg" action="/index.php?action=rege" method="post">
                        <table width="402" height="262" border="0" align="right">
                          <tr>
                            <td height="42"><input type="text" id="u_uname" name="u_uname"   /></td>
                          </tr>
                          <tr>
                            <td height="49"><input type="password" id="u_pwd" name="u_pwd"   /></td>
                          </tr>
                          <tr>
                            <td height="49"><input type="text" id="u_email" name="u_email"   />
                              </td>
                          </tr>
                          <tr>
                            <td height="47"><input type="text" id="u_phone" name="u_phone"   />
                            </td>
                          </tr>
                          <tr>
                            <td height="61"><img id="regsub" src="<?php echo $this->_tpl_vars['public']; ?>
Public/images/reg.gif" style="cursor: pointer">
                            </td>
                          </tr>
                        </table>
                        </form>
                        </td>
                    </tr>
                </table>
  </div>
            <div style="clear: both;"></div>
        </div>
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div style="clear: both;"></div>
      </div>
    </div>
</div>
</body>
<script language="javascript">
$(document).ready(function(){
	$("#loginsub").click(function(){
		$("#loginform").submit();
	})
	
		$("#regsub").click(function(){
		$("#reg").submit();
	})
});
</script>
</html>