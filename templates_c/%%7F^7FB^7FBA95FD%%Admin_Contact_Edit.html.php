<?php /* Smarty version 2.6.26, created on 2012-11-14 04:00:09
         compiled from newadmin/Admin_Contact_Edit.html */ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link type="text/css" rel="stylesheet" href="/templates/newadmin/css/common.css" />
<link type="text/css" rel="stylesheet" href="/templates/newadmin/css/add.css" />

<script type="text/javascript" src="<?php echo $this->_tpl_vars['calendar']; ?>
jquery-1.4.3.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['calendar']; ?>
Js/calendar.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['calendar']; ?>
Css/calendar.css" />
</head>

<body>
<div align="center">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "newadmin/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<div class="block">
    	<div class="left">
        	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "newadmin/left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        
        <div class="right">
        	<div class="guide"><b><a href="admin.php?action=index">首页</a> > <a href="/admin.php?action=Contact_List">新闻管理</a> > <font color="#e50000">编辑新闻</font></b></div>
        	<div class="table_new">
        	<form id="contact" action="/admin.php" method="post" >
        	  <table width="780" height="auto" border="0"  cellpadding="0" cellspacing="0" style="margin:50px 0px 0px 0px;">
	        	  
	        	 <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c1.jpg" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; ">
	                  	<div style="float:left; width:20%;_margin-left:-25px;"><input type="radio" name="c_class" value="1" <?php if ($this->_tpl_vars['contact'][0]['c_class'] == 1): ?> checked <?php endif; ?>>资料请求</div>
						<div style="float:left; width:20%;_margin-left:-25px;"><input type="radio" name="c_class" value="2" <?php if ($this->_tpl_vars['contact'][0]['c_class'] == 2): ?> checked <?php endif; ?>>代理商加盟</div>
						<div style="float:left; width:20%;_margin-left:-25px;"><input type="radio" name="c_class" value="3" <?php if ($this->_tpl_vars['contact'][0]['c_class'] == 3): ?> checked <?php endif; ?>>投诉建议</div>
						<div style="float:left; width:20%"><input type="radio" name="c_class" value="4"<?php if ($this->_tpl_vars['contact'][0]['c_class'] == 4): ?> checked <?php endif; ?>>其它</div>
	                  </td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c2.jpg" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="c_area" name="c_area" value="<?php echo $this->_tpl_vars['contact'][0]['c_area']; ?>
" style="width: 150px; font-weight: bold;" type="text" ></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c3.jpg" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="c_name" name="c_name" value="<?php echo $this->_tpl_vars['contact'][0]['c_name']; ?>
"style="width: 150px; font-weight: bold;" type="text" ></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c4.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="c_company" name="c_company" value="<?php echo $this->_tpl_vars['contact'][0]['c_company']; ?>
"  style="width: 250px; font-weight: bold;" type="text"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c5.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="c_url" name="c_url" value="<?php echo $this->_tpl_vars['contact'][0]['c_url']; ?>
" style="width: 250px; font-weight: bold;" type="text"></td>
	      	      </tr>

				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c6.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="c_phone" name="c_phone" value="<?php echo $this->_tpl_vars['contact'][0]['c_phone']; ?>
" style="width: 150px; font-weight: bold;" type="text"></td>
	      	      </tr>
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c7.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="c_call" name="c_call" value="<?php echo $this->_tpl_vars['contact'][0]['c_call']; ?>
" style="width: 150px; font-weight: bold;" type="text"></td>
	      	      </tr>
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c8.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="c_fax" name="c_fax" value="<?php echo $this->_tpl_vars['contact'][0]['c_fax']; ?>
" style="width: 150px; font-weight: bold;" type="text"></td>
	      	      </tr>
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c9.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="c_email" name="c_email" value="<?php echo $this->_tpl_vars['contact'][0]['c_email']; ?>
" style="width: 150px; font-weight: bold;" type="text"></td>
	      	      </tr>
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/c10.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><?php echo $this->_tpl_vars['fck']; ?>
</td>
	      	      </tr>

	      	      <tr>
	        	      <td height="50" align="right"></td>
	        	      <td style="font-size:12px;text-indent:2em; " align="left"></td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right">&nbsp;</td>
	        	      <td align="left" style="font-size:12px;text-indent:2em;">
	        	      	<input name="sub" id="sub"  value="" title="提交" type="submit" style="background:url(/templates/newadmin/image/button.jpg);width:150px;height:29px;border:none;"  onmouseover="this.style.cursor='pointer'">
	        	      </td>
	      	      </tr>
	              <tr>
	        	      <td height="50" align="right"></td>
	        	      <td style="font-size:12px;text-indent:2em; " align="left"></td>
	      	      </tr>
      	    </table>
      	    <input type="hidden" name="c_id" id="c_id" value="<?php echo $this->_tpl_vars['contact'][0]['c_id']; ?>
">
			<input type="hidden" name="action" id="action" value="updateContact" />
			</form>
        	</div>
        </div>
	</div>
</div>
</body>
</html>
</html>