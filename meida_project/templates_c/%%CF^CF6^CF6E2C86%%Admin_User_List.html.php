<?php /* Smarty version 2.6.26, created on 2011-09-01 20:55:27
         compiled from admin/Admin_User_List.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户列表</title>
    <link href="/templates/Content/regiester/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->_tpl_vars['public']; ?>
css/page.css" rel="stylesheet" type="text/css">
</head>
<body>
<br/>
<br/>
<br/>
<table id="friendlink" width="98%" height="60" cellpadding="1"
	cellspacing="1" bordercolor="#B9C2E1" bgcolor="#FFFFFF">
	<tr>
		<td width="100px" height="24" align="center" valign="middle"
			bordercolor="#D6E9EB" bgcolor="#73A0D2">编号</td>
		<td width="380px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">用户名</td>
		<td width="150px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">邮箱</td>
		<td width="50px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">手机</td>
        <td width="100px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">级别</td>
		<td width="70px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">状态</td>
		<td align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">操作</td>
	</tr>

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
	<tr style="border-bottom: 1px solid #d6e9eb;"
		onmousemove='this.style.backgroundColor="#E2E9ED"'
		onmouseout='this.style.backgroundColor="#ffffff"'>
		<td height="31" align="center" valign="middle" bordercolor="#D6E9EB"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['u_id']; ?>
</td>
		<td align="center" valign="middle" bordercolor="#D6E9EB">
		<div><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['u_uname']; ?>
</div>
		</td>
		<td width="100px" align="center" valign="middle" bordercolor="#D6E9EB">
		<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['u_email']; ?>
</td>
		<td align="center" valign="middle" bordercolor="#D6E9EB">
		<div><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['u_phone']; ?>
</div>
		</td>
        <td align="center" valign="middle" bordercolor="#D6E9EB">
            <?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['u_level'] == 1): ?>普通会员<?php else: ?>VIP<?php endif; ?>
        </td>
		<td align="center" valign="middle" bordercolor="#D6E9EB"
			style="color: #999"><?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['u_status'] == 1): ?>开通<?php else: ?>禁用 <?php endif; ?></td>
		<td width="5%" align="center" valign="middle" bordercolor="#D6E9EB">
		<div><a
			href="/admin.php?u_id=<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['u_id']; ?>
&action=guestedit">编辑</a></div>
		</td>
	</tr>
	<?php endfor; endif; ?>
</table>
<br />
<div style="width: 100%; text-align: left;padding-left: 10px">
    </div>
</body>
</html>