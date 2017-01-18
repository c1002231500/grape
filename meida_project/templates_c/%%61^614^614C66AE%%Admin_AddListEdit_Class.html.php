<?php /* Smarty version 2.6.26, created on 2011-08-25 15:08:12
         compiled from admin/Admin_AddListEdit_Class.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="<?php echo $this->_tpl_vars['public']; ?>
regiester/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['public']; ?>
js/jquery.js"></script>
<!--必需引用：JS文件-->

<title>添加大类</title>
<style>
#lt tr{
	border-bottom:1px solid #d6e9eb;
}
</style>
</head>
<body style="text-align: left;padding-left:10px;">
<form id="menut" action="/admin.php?action=add_class" method="post">
<div style="color:red; height:30px;margin-top:20px;"><strong>添加大类 </strong></div>
&nbsp;&nbsp;&nbsp;
类别名：<input id="c_name" name="c_name" style="width: 250px; font-weight: bold;"  type="text"><br/><br/>
<div style="padding-left:25px;">状态：
    <input name="c_status" type="radio" value="1" checked="checked">显示
    <input name="class_status" type="radio" value="2" >不显示 </div>&nbsp;&nbsp;
<input type="hidden" name="action" value="add_class"/>
<div style="padding-left:30px;"><input name="sub" id="sub"  value=" 提 交 "  type="submit"></div>

</form>
<br/>
<table id="lt" width="98%" height="60" cellpadding="1"
	cellspacing="1" bordercolor="#B9C2E1" bgcolor="#FFFFFF">
	<tr>
		<td width="100px" height="24" align="center" valign="middle"
			bordercolor="#D6E9EB" bgcolor="#73A0D2">编号</td>
		<td width="400px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">类别名</td>
		<td width="150px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">状态</td>
        <td width="150px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">操作小类</td>
		<td colspan="2" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">操作</td>
	</tr>

	<?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['cs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<tr onmousemove='this.style.backgroundColor="#E2E9ED"'
		onmouseout='this.style.backgroundColor="#ffffff"'>
		<td height="31" align="center" valign="middle" bordercolor="#D6E9EB"><?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
</td>
		<td align="center" valign="middle" bordercolor="#D6E9EB">
			<div id="edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_dis_name"><?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_name']; ?>
</div>
			<div id="edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_show_name" style="display: none">
			<input type="text" id="class_text_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
" value=<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_name']; ?>
></div>
		</td>
		<td align="center" valign="middle" bordercolor="#D6E9EB">
		<div id="edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_dis_edit">
		    <?php if ($this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_status'] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></div>
			<div id="edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_show_edit" style="display: none">
			<select id="edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_static">
			<option value="<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_status']; ?>
">
            <?php if ($this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_status'] == 1): ?>显示 (now)<?php else: ?>不显示 (now)<?php endif; ?></option>
			<option value="1">显示 </option>
			<option value="2">不显示</option>
			</select>
		</div>
        </td>
        <td align="center" valign="middle" bordercolor="#D6E9EB">
             <a href="/admin.php?action=stylelist&cid=<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
&name=<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_name']; ?>
">添加小类</a>
        </td>
		<td width="5%" align="center" valign="middle" bordercolor="#D6E9EB">
		<div id="edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_dis_tedit"><a
			href="javascript:edit_show('edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_show','edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_dis')">编辑</a>
		</div>
		<div id="edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_show_tedit" style="display: none"><input
			type="submit" value="确定" class="regular-button"
			onClick="javascript:sub_edit('<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
','class_text_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
','edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_static')">
		</div>
		</td>
		<td width="6%" align="center" valign="middle" bordercolor="#D6E9EB">
		<div id="edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_dis_reset"><a
			href="javascript:class_del(<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
)">删除</a></div>
		<div id="edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_show_reset" style="display: none"><input
			type="reset" class="regular-button"
			onClick="javascript:edit_dis('edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_show','edit_<?php echo $this->_tpl_vars['cs'][$this->_sections['sec1']['index']]['c_id']; ?>
_dis')"
			value="取消"></div>
		</td>
	</tr>
	<?php endfor; endif; ?>

</table>
<br/>
<div style="width: 100%; text-align: left; padding-left: 30px"><?php echo $this->_tpl_vars['page']; ?>
</div>


<script>
function edit_show(show_id,dis_id)
{
	document.getElementById(show_id+"_name").style.display='';
	document.getElementById(dis_id+"_name").style.display='none';

	document.getElementById(show_id+"_edit").style.display='';
	document.getElementById(dis_id+"_edit").style.display='none';

	document.getElementById(show_id+"_tedit").style.display='';
	document.getElementById(dis_id+"_tedit").style.display='none';

	document.getElementById(show_id+"_reset").style.display='';
	document.getElementById(dis_id+"_reset").style.display='none';
}

function edit_dis(show_id,dis_id)
{

	document.getElementById(show_id+"_name").style.display='none';
	document.getElementById(dis_id+"_name").style.display='';

	document.getElementById(show_id+"_edit").style.display='none';
	document.getElementById(dis_id+"_edit").style.display='';

	document.getElementById(show_id+"_tedit").style.display='none';
	document.getElementById(dis_id+"_tedit").style.display='';

	document.getElementById(show_id+"_reset").style.display='none';
	document.getElementById(dis_id+"_reset").style.display='';
}

function sub_edit(show_id,class_name,class_edit)
{
	var c_id=show_id;
	var c_name=document.getElementById(class_name).value;
	var c_edit=document.getElementById(class_edit).value;
    $.ajax({
       type: "POST",
       url: "/admin.php",
       data: "id="+c_id+"&action=upclass&name="+c_name+"&static="+c_edit,
       success: function(msg){
         window.location.reload();
       }
    });
}

function class_del(class_id)
{
	if (confirm("确定要删除该数据？删除后数据并无法恢复！"))
	{
	$.ajax({
       type: "POST",
       url: "/admin.php",
       data: "id="+class_id+"&action=delclass",
       success: function(msg){
         window.location.reload();
       }
    });
	}
}
</script>
</body>
</html>