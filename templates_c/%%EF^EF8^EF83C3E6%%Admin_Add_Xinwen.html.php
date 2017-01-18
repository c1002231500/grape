<?php /* Smarty version 2.6.26, created on 2012-11-14 01:33:43
         compiled from newadmin/Admin_Add_Xinwen.html */ ?>
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
        	<div class="guide"><b><a href="admin.php?action=Xinwen_List">新闻管理</a> > <font color="#e50000">新闻活动</font></b></div>
        	<div class="table_new">
        	<form id="xinwen" action="/admin.php?action=Xinwen_List" method="post" enctype="multipart/form-data">
        	  <table width="780" height="auto" border="0"  cellpadding="0" cellspacing="0" style="margin:50px 0px 0px 0px;">		
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xtit.jpg" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_title" name="x_title"  style="width: 450px; font-weight: bold;" type="text"></td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xstart.jpg" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_starttime" name="x_starttime" style="width: 150px; font-weight: bold;" type="text" onClick="displayCalendar(this, 'yyyy-mm-dd hh:ii', this, true, '');"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xact.jpg" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_acttime" name="x_acttime" style="width: 150px; font-weight: bold;" type="text" onClick="displayCalendar(this, 'yyyy-mm-dd hh:ii', this, true, '');"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/x_pic.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="xinwenimage" name="xinwenimage" style="width: 250px; font-weight: bold;" type="file">50*50</td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/xcla.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_type" name="x_type" style="width: 150px; font-weight: bold;" type="text"></td>
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
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="x_keyword" name="x_keyword"  style="width: 450px; font-weight: bold;" type="text"></td>
	      	      </tr>
	        	  
	        	  
	      	      <tr valign="top">
	        	      <td height="30" align="right"></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "></td>
	      	      </tr>
	        	 
	        	  <tr valign="top">
	        	      <td height="50" align="right"></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "></td>
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
      	    <input type="hidden" name="action" id="action" value="addXinwen" /></form>
        	</div>
            
        </div>
	</div>
</div>
</body>
</html>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['public']; ?>
js/select.js">
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['public']; ?>
js/select1.js">	
</script>
<script>  
     //chooseOne()函式，參數為觸發該函式的元素本身  
     function chooseOne(cb){  
    	 $("#stype").html('');
         //先取得同name的chekcBox的集合物件  
       var obj = document.getElementsByName("n_class[]");  
         for (i=0; i<obj.length; i++){  
             //判斷obj集合中的i元素是否為cb，若否則表示未被點選  
		      if (obj[i].checked)
		        {
		    	  $.ajax({
		    		   type: "GET",
		    		   url: "/admin.php",
		    		   data: "action=loadcheckTypenews&cid="+ obj[i].value,
		    		  success: function(html){
		    		    $("#stype").append(html);
		    		  }
		    		});
		        }
         }  
     }  
 </script>  