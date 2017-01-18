<?php /* Smarty version 2.6.26, created on 2012-11-14 04:03:27
         compiled from newadmin/Admin_Wine_List.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'substr', 'newadmin/Admin_Wine_List.html', 63, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link type="text/css" rel="stylesheet" href="/templates/newadmin/css/common.css" />
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
        	<div class="add">
        	<div style="float:left;"><b><font color="#e50000">产品管理</font></b></div>
        	</div>
            
           <div class="country">
            <div style="width:759px; height:40px; line-height:40px; color:#3333333; text-align:right;"><b></b></div> 
                <div style="width:798px;height:auto;">
					
                    	<table width="100%" border="0"  style="border-bottom:1px solid #d6d6d6; border-top:1px solid #d6d6d6; background:#e8e7e7" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="30" align="center" width="10%">ID:</td>
							<td align="center" width="10%">logo</td>
                            <td align="center" width="20%">中文名</td>
                            <td align="center" width="10%">英文名</td>
                            <td align="center" width="10%">色泽</td>
							<td align="center" width="10%">年份</td>
                            <td align="center" width="10%">库存</td>
                            
                            <td colspan="2" align="center" valign="middle" width="20%">操作</td>
                          </tr>
						  
						</table>

						<div>
                        	<table width="100%" border="0" cellpadding="0" cellspacing="0">
                        	<?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['flist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec1']['show'] = true;
$this->_sections['sec1']['max'] = $this->_sections['sec1']['loop'];
$this->_sections['sec1']['step'] = 1;
$this->_sections['sec1']['start'] = $this->_sections['sec1']['step'] > 0 ? 0 : $this->_sections['sec1']['loop']-1;
if ($this->_sections['sec1']['show']) {
    $this->_sections['sec1']['total'] = $this->_sections['sec1']['loop'];
    if ($this->_sections['sec1']['total'] == 0)
        $this->_sections['sec1']['show'] = false;
} else
    $this->_sections['sec1']['total'] = 0;
if ($this->_sections['sec1']['show']):

            for ($this->_sections['sec1']['index'] = $this->_sections['sec1']['start'], $this->_sections['sec1']['iteration'] = 1;
                 $this->_sections['sec1']['iteration'] <= $this->_sections['sec1']['total'];
                 $this->_sections['sec1']['index'] += $this->_sections['sec1']['step'], $this->_sections['sec1']['iteration']++):
$this->_sections['sec1']['rownum'] = $this->_sections['sec1']['iteration'];
$this->_sections['sec1']['index_prev'] = $this->_sections['sec1']['index'] - $this->_sections['sec1']['step'];
$this->_sections['sec1']['index_next'] = $this->_sections['sec1']['index'] + $this->_sections['sec1']['step'];
$this->_sections['sec1']['first']      = ($this->_sections['sec1']['iteration'] == 1);
$this->_sections['sec1']['last']       = ($this->_sections['sec1']['iteration'] == $this->_sections['sec1']['total']);
?>
                          	  <tr>
                                    <td height="60" align="center" width="10%"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_id']; ?>
</td>
                                    <td align="center" width="10%"> 
										<?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_pic'] != ''): ?><img src="include/Public/Wine/<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_pic']; ?>
" width="50" height="50" />
                                        <?php elseif ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_pic'] == ''): ?><img src="include/Public/Wine/none.jpg" width="50" height="50" />
                                        <?php endif; ?>
									</td>
									<td align="center" width="20%"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_chname']; ?>
</td>
									<td align="center" width="10%"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_enname']; ?>
</td>
                                    <td align="center" width="10%">
                                        <?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_color'] == '1'): ?>红色
                                        <?php elseif ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_color'] == '2'): ?>白色
                                        <?php endif; ?>
                                    </td>
                                    <td align="center" width="10%"><?php echo substring(array('str' => $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_year'],'end' => 4), $this);?>
</td>
                                    <td align="center" width="10%"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_reserve']; ?>
</td>
									
									<td width="10%" align="center" valign="middle" bordercolor="#D6E9EB">
										<div><a href="/admin.php?wid=<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_id']; ?>
&action=Wine_Edit"><img src="/templates/newadmin/image/htbj.jpg" width="30" height="15"></a></div>
									</td>
									
									<td width="10%" align="center" valign="middle" bordercolor="#D6E9EB">
										<div><a href="javascript:new_del('<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_id']; ?>
')"><img src="/templates/newadmin/image/htsc.jpg" width="30" height="15"></a></div>
									</td>
                              </tr>
                          	<?php endfor; endif; ?>
                          		<tr>
                            		<td height="60" colspan="7" align="center"><div style="margin-left:5px;"><?php echo $this->_tpl_vars['page']; ?>
</div></td>
                          		</tr>
                            </table>
                        </div>

                    	
						
                    <div style="width:798px; height:30px; margin-top:10px; clear:both"></div>
                </div>
            </div>
            <div style="margin-bottom:40px ;width:800px; height:1px;"></div>
        </div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
    function  new_del(id){
        if(confirm("确定要删除该数据？删除后数据并无法恢复！")){
        $.ajax({
           type: "POST",
           url: "/admin.php",
           data: "action=deleteWine&wid="+id,
           success: function(msg){
           //    alert(msg);
            window.location.reload();
           }
        });
      }
    }
</script>
