<?php /* Smarty version 2.6.26, created on 2012-11-22 07:38:03
         compiled from newadmin/Admin_Add_Wine.html */ ?>
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
        	<div class="guide"><b><a href="admin.php?action=Wine_List">产品管理</a> > <font color="#e50000">添加产品</font></b></div>
        	<div class="table_new">
        	<form id="activity" action="/admin.php" method="post" enctype="multipart/form-data">
        	  <table width="780" height="auto" border="0"  cellpadding="0" cellspacing="0" style="margin:50px 0px 0px 0px;">		
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wccd.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_country" name="w_country"  style="width: 250px; font-weight: bold;" type="text"></td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wzwm.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_chname" name="w_chname" style="width: 150px; font-weight: bold;" type="text"></td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wywm.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_enname" name="w_enname"  style="width: 250px; font-weight: bold;" type="text"></td>
	      	      </tr>
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wtc.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_genteral" name="w_genteral"  style="width: 250px; font-weight: bold;" type="text"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wdan.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; ">
	                  	<div style="float:left; width:30%;_margin-left:-25px;"><input type="radio" name="w_single" value="1" checked="checked">单品</div>
						<div style="float:left; width:30%"><input type="radio" name="w_single" value="2" >套装</div>
	                  </td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wse.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; ">
	                  	<div style="float:left; width:30%;_margin-left:-25px;"><input type="radio" name="w_color" value="1" checked="checked">红色</div>
						<div style="float:left; width:30%"><input type="radio" name="w_color" value="2">白色</div>
	                  </td>
	      	      </tr>
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wnian.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_year" name="w_year" style="width: 250px; font-weight: bold;" type="text"></td>
	      	      </tr>
					
					<tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wjj.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><?php echo $this->_tpl_vars['fck']; ?>
</td>
	      	      </tr>
				  
	      	      <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wrl.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_descript" name="w_descript"  style="width: 250px; font-weight: bold;" type="text"></td>
	      	      </tr>
				  
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wjg.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_price" name="w_price"  style="width: 250px; font-weight: bold;" type="text"></td>
	      	      </tr>
				  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wkc.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="w_reserve" name="w_reserve"  style="width: 250px; font-weight: bold;" type="text"></td>
	      	      </tr>
				  
	        	  <tr valign="top">
	        	      <td height="50" align="right"><img src="/templates/newadmin/image/wtp.jpg" alt="" width="120" height="25" /></td>
	        	      <td align="left" style="font-size:12px;text-indent:2em; "><input id="wineimage" name="wineimage" style="width: 250px; font-weight:bold;" type="file">165*154<br />
					  </td>
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
      	    <input type="hidden" name="action" id="action" value="addWine" />
			</form>
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