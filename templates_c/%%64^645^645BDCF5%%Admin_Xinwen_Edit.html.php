<?php /* Smarty version 2.6.26, created on 2012-11-14 01:45:00
         compiled from newadmin/Admin_Xinwen_Edit.html */ ?>
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
        	<div class="guide"><b><a href="admin.php?action=index">首页</a> > <a href="/admin.php?action=Xinwen_List">新闻管理</a> > <font color="#e50000">编辑新闻</font></b></div>
        	<div class="table_new">
        	<form id="xinwen" action="/admin.php" method="post" enctype="multipart/form-data">
        	  <table width="780" height="auto" border="0"  cellpadding="0" cellspacing="0" style="margin:50px 0px 0px 0px;">
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xtit.jpg" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_title" name="x_title" value="<?php echo $this->_tpl_vars['xinwen'][0]['x_title']; ?>
" style="width: 450px; font-weight: bold;" type="text"></td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xstart.jpg" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_starttime" name="x_starttime" style="width: 150px; font-weight: bold;" type="text" value="<?php echo $this->_tpl_vars['xinwen'][0]['x_starttime']; ?>
" onClick="displayCalendar(this, 'yyyy-mm-dd hh:ii', this, true, '');"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xact.jpg" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_acttime" name="x_acttime" style="width: 150px; font-weight: bold;" type="text" value="<?php echo $this->_tpl_vars['xinwen'][0]['x_acttime']; ?>
"onClick="displayCalendar(this, 'yyyy-mm-dd hh:ii', this, true, '');"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/x_pic.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="xinwenimage" name="xinwenimage" style="width: 250px; font-weight: bold;" type="file">50*50
					   <?php if ($this->_tpl_vars['xinwen'][0]['x_pic'] != ''): ?><img src="include/Public/Xinwen/<?php echo $this->_tpl_vars['xinwen'][0]['x_pic']; ?>
" width="50" height="50"/>
					  <?php elseif ($this->_tpl_vars['xinwen'][0]['x_pic'] == ''): ?><img src="include/Public/Xinwen/none.jpg" width="50" height="50"/>
					  <?php endif; ?>
					  </td>
	      	      </tr>

				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xcla.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_type" name="x_type" style="width: 150px; font-weight: bold;" value="<?php echo $this->_tpl_vars['xinwen'][0]['x_type']; ?>
" type="text"></td>
	      	      </tr>

				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xcon.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><div style="_margin-left:-25px;"><?php echo $this->_tpl_vars['fck']; ?>
</div></td>
	      	      </tr>
				  <tr valign="top">
	        	      <td height="30" align="right"></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "></td>
	      	      </tr>
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xkey.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_keyword" name="x_keyword"  style="width: 450px; font-weight: bold;" value="<?php echo $this->_tpl_vars['xinwen'][0]['x_keyword']; ?>
" type="text"></td>
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
      	    <input type="hidden" name="x_id" id="x_id" value="<?php echo $this->_tpl_vars['xinwen'][0]['x_id']; ?>
">
			<input type="hidden" name="action" id="action" value="updateXinwen" />
			</form>
        	</div>
        </div>
	</div>
</div>
</body>
</html>
</html>