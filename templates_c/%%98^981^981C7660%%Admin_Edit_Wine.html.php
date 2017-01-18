<?php /* Smarty version 2.6.26, created on 2012-11-14 03:26:05
         compiled from newadmin/Admin_Edit_Wine.html */ ?>
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
        	<div class="guide"><b><a href="admin.php?action=index">首页</a> > <a href="/admin.php?action=Wine_List">产品管理</a> > <font color="#e50000">编辑产品</font></b></div>
        	<div class="table_new">
        	<form id="wine" action="/admin.php" method="post" enctype="multipart/form-data">
        	  <table width="780" height="auto" border="0"  cellpadding="0" cellspacing="0" style="margin:50px 0px 0px 0px;">
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wccd.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_country" name="w_country"  style="width: 250px; font-weight: bold;" type="text" value="<?php echo $this->_tpl_vars['wine'][0]['w_country']; ?>
"></td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wzwm.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_chname" name="w_chname" style="width: 150px; font-weight: bold;" type="text" value="<?php echo $this->_tpl_vars['wine'][0]['w_chname']; ?>
"></td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wywm.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_enname" name="w_enname"  style="width: 250px; font-weight: bold;" type="text" value="<?php echo $this->_tpl_vars['wine'][0]['w_enname']; ?>
"></td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wtc.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_genteral" name="w_genteral"  style="width: 250px; font-weight: bold;" type="text" value="<?php echo $this->_tpl_vars['wine'][0]['w_genteral']; ?>
"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wdan.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em;">
	                  	<div style="float:left; width:30%;_margin-left:-25px;"><input type="radio" name="w_single" value="1"  <?php if ($this->_tpl_vars['wine'][0]['w_single'] == 1): ?> checked<?php endif; ?>>单品</div>
						<div style="float:left; width:30%"><input type="radio" name="w_single" value="2" <?php if ($this->_tpl_vars['wine'][0]['w_single'] == 2): ?> checked <?php endif; ?>>套装</div>
	                  </td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wse.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; ">
	                  	<div style="float:left; width:30%;_margin-left:-25px;"><input type="radio" name="w_color" value="1" <?php if ($this->_tpl_vars['wine'][0]['w_color'] == 1): ?>checked <?php endif; ?>>红色</div>
						<div style="float:left; width:30%"><input type="radio" name="w_color" value="2" <?php if ($this->_tpl_vars['wine'][0]['w_color'] == 2): ?> checked <?php endif; ?>>白色</div>
	                  </td>
	      	      </tr>
				  
				
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wnian.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_year" name="w_year" style="width: 250px; font-weight: bold;" type="text" value="<?php echo $this->_tpl_vars['wine'][0]['w_year']; ?>
" onClick="displayCalendar(this, 'yyyy-mm-dd hh:ii', this, true, '');"></td>
	      	      </tr>
				 
				 <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wjj.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; ">
	                  	<div style="_margin-left:-25px;"><?php echo $this->_tpl_vars['fck']; ?>
</div>
	                    </td>
	      	      </tr>
				  <tr>
	        	      <td height="50" align="right"></td>
	        	      <td style="font-size:12px;text-indent:2em; " align="left"></td>
	      	      </tr>
	      	      <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wrl.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_descript" name="w_descript"  style="width: 250px; font-weight: bold;" value="<?php echo $this->_tpl_vars['wine'][0]['w_descript']; ?>
" type="text"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wjg.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_price" name="w_price"  style="width: 250px; font-weight: bold;" value="<?php echo $this->_tpl_vars['wine'][0]['w_price']; ?>
" type="text"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wkc.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_reserve" name="w_reserve"  style="width: 250px; font-weight: bold;" value="<?php echo $this->_tpl_vars['wine'][0]['w_reserve']; ?>
" type="text"></td>
	      	      </tr>
				  
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wtp.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="wineimage" name="wineimage" style="width: 250px; font-weight:bold;"  type="file">50*50
					  <?php if ($this->_tpl_vars['wine'][0]['w_pic'] != ''): ?><img src="include/Public/Wine/<?php echo $this->_tpl_vars['wine'][0]['w_pic']; ?>
" width="50" height="50"/>
					  <?php elseif ($this->_tpl_vars['wine'][0]['w_pic'] == ''): ?><img src="include/Public/Wine/none.jpg" width="50" height="50"/>
					  <?php endif; ?>
					  
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
      	    <input type="hidden" name="w_id" id="w_id" value="<?php echo $this->_tpl_vars['wine'][0]['w_id']; ?>
">
			<input type="hidden" name="action" id="action" value="updateWine" />
			</form>
        	</div>

        </div>
	</div>
</div>
</body>
</html>