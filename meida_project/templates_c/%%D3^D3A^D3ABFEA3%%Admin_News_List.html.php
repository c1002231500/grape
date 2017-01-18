<?php /* Smarty version 2.6.26, created on 2011-08-25 15:07:52
         compiled from admin/Admin_News_List.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'substr', 'admin/Admin_News_List.html', 45, false),array('modifier', 'date_format', 'admin/Admin_News_List.html', 62, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>新闻列表</title>
    <link href="/templates/Content/regiester/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->_tpl_vars['public']; ?>
css/page.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="<?php echo $this->_tpl_vars['calendar']; ?>
jquery-1.4.3.js"></script>
</head>
<body>
<br/>
<div style="text-align: left;padding-left: 20px;">共有  <?php echo $this->_tpl_vars['count']; ?>
 条</div>
<br/>
<br/>
<table id="friendlink" width="98%" height="60" cellpadding="1"
	cellspacing="1" bordercolor="#B9C2E1" bgcolor="#FFFFFF">
	<tr>
		<td width="100px" height="24" align="center" valign="middle"
			bordercolor="#D6E9EB" bgcolor="#73A0D2">编号</td>
		<td width="380px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">标题</td>
		<td width="150px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">发布时间</td>
		<td width="50px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">状态</td>
        <td width="120px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">新闻分类</td>
		<td width="70px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">是否推荐</td>
        <td width="120px" align="center" valign="middle" bordercolor="#D6E9EB"
			bgcolor="#73A0D2">系统时间</td>
		<td colspan="2" align="center" valign="middle" bordercolor="#D6E9EB"
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
		<td height="31" align="center" valign="middle" bordercolor="#D6E9EB"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_id']; ?>
</td>
		<td align="left" valign="middle" bordercolor="#D6E9EB">
		<div><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_title']; ?>
</div>
		</td>
		<td width="100px" align="center" valign="middle" bordercolor="#D6E9EB">
		<?php echo substring(array('str' => $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_starttime'],'end' => 10), $this);?>
</td>
		<td align="center" valign="middle" bordercolor="#D6E9EB">
		<div><?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_status'] == 1): ?>显示 <?php else: ?>不显示 <?php endif; ?></div>
		</td>
        <td align="center" valign="middle" bordercolor="#D6E9EB">
		<div>
            <?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_site'] == 'A'): ?>企業動向
            <?php elseif ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_site'] == 'B'): ?>業界最前線
            <?php elseif ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_site'] == 'C'): ?>広告・販促
            <?php elseif ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_site'] == 'D'): ?>マクロ
            <?php elseif ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_site'] == 'E'): ?>レポート
            <?php endif; ?>
		</div>
		</td>
		<td align="center" valign="middle" bordercolor="#D6E9EB"
			style="color: #999"><?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_recommend'] == 1): ?>推荐 <?php else: ?>不推荐 <?php endif; ?></td>
        		<td align="center" valign="middle" bordercolor="#D6E9EB"
			style="color: #999"><?php echo ((is_array($_tmp=$this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_systime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")); ?>
</td>
		<td width="5%" align="center" valign="middle" bordercolor="#D6E9EB">
		<div><a
			href="/admin.php?nid=<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_id']; ?>
&action=newedit">编辑</a></div>
		</td>
		<td width="6%" align="center" valign="middle" bordercolor="#D6E9EB">
		<div><a href="javascript:new_del('<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_id']; ?>
')">删除</a></div>
		</td>
	</tr>
	<?php endfor; endif; ?>
</table>
<br />
<div style="width: 100%; text-align: left;padding-left: 10px">
<?php echo $this->_tpl_vars['page']; ?>

    </div>
<script type="text/javascript">
    function  new_del(id){
        if(confirm("确定要删除该数据？删除后数据并无法恢复！")){
        $.ajax({
           type: "POST",
           url: "/admin.php",
           data: "action=ajaxremove&nid="+id,
           success: function(msg){
               //alert(msg);
            window.location.reload();
           }
        });
      }
    }
</script>
</body>
</html>