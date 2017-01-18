<?php /* Smarty version 2.6.26, created on 2011-08-25 15:12:36
         compiled from admin/Admin_Edit_Brand.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="/templates/Content/regiester/style.css" rel="stylesheet"
	type="text/css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['calendar']; ?>
jquery-1.4.3.js"></script>
<title>产品添加</title>
</head>
<body style="text-align: left">
<br />
<br />

<form id="news" action="/admin.php" method="post"
	enctype="multipart/form-data">
<table class="cont-tab" width="800px" style="table-layout: fixed;"
	cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td class="td1">中文名：<span class="nes">*</span></td>
			<td class="td2"><input id="cname" name="cname"
				class="inp ipt-normal" style="width: 450px; font-weight: bold;"
				value="<?php echo $this->_tpl_vars['brand'][0]['b_cname']; ?>
" type="text"> &nbsp;</td>
		</tr>
		<tr>
			<td class="td1">英文名：<span class="nes">*</span></td>
			<td class="td2"><input id="ename" name="ename"
				class="inp ipt-normal" style="width: 250px; font-weight: bold;"
				type="text" value="<?php echo $this->_tpl_vars['brand'][0]['b_ename']; ?>
"></td>
		</tr>
		<tr>
			<td class="td1">日文名：<span class="nes">*</span></td>
			<td class="td2"><input id="jname" name="jname"
				class="inp ipt-normal" style="width: 250px; font-weight: bold;"
				type="text" value="<?php echo $this->_tpl_vars['brand'][0]['b_jname']; ?>
"></td>
		</tr>
				<tr>
			<td class="td1">URL链接：<span class="nes">*</span></td>
			<td class="td2"><input id="url" name="url"
				class="inp ipt-normal" style="width: 400px; font-weight: bold;"
				 type="text" value="<?php echo $this->_tpl_vars['brand'][0]['b_url']; ?>
"> </td>
		</tr>
		<tr style="background-color: #ebebeb">
			<td class="td1">logo：</td>
			<td class="td2"><input id="brandimage" name="brandimage"
				class="inp ipt-normal" style="width: 250px; font-weight: bold;"
				type="file"> <?php if ($this->_tpl_vars['brand'][0]['b_logo'] != ''): ?> <img
				src="include/Public/Brand/<?php echo $this->_tpl_vars['brand'][0]['b_logo']; ?>
" width="50"
				height="50" />&nbsp;&nbsp;高度小于宽度即可</td>
			<?php endif; ?>
		</tr>
		
		<tr>
			<td class="td1">状态：</td>
			<td class="td2"><select id="static" name="static"
				class="inp ipt-normal" style="width: 250px; font-weight: bold;">
				<option value="1"><?php if ($this->_tpl_vars['brand'][0]['b_static'] == '1'): ?>开启<?php else: ?>停用<?php endif; ?></option>
				<option value="1">开启</option>
				<option value="2">停用</option>
			</select></td>
		</tr>
		<tr>
			<td class="td1">大类：<span class="nes">*</span></td>
			<td class="td2"><?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['class']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <?php $this->assign('g', 0); ?> <?php unset($this->_sections['sec2']);
$this->_sections['sec2']['name'] = 'sec2';
$this->_sections['sec2']['loop'] = is_array($_loop=$this->_tpl_vars['classselect']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec2']['show'] = true;
$this->_sections['sec2']['max'] = $this->_sections['sec2']['loop'];
$this->_sections['sec2']['step'] = 1;
$this->_sections['sec2']['start'] = $this->_sections['sec2']['step'] > 0 ? 0 : $this->_sections['sec2']['loop']-1;
if ($this->_sections['sec2']['show']) {
    $this->_sections['sec2']['total'] = $this->_sections['sec2']['loop'];
    if ($this->_sections['sec2']['total'] == 0)
        $this->_sections['sec2']['show'] = false;
} else
    $this->_sections['sec2']['total'] = 0;
if ($this->_sections['sec2']['show']):

            for ($this->_sections['sec2']['index'] = $this->_sections['sec2']['start'], $this->_sections['sec2']['iteration'] = 1;
                 $this->_sections['sec2']['iteration'] <= $this->_sections['sec2']['total'];
                 $this->_sections['sec2']['index'] += $this->_sections['sec2']['step'], $this->_sections['sec2']['iteration']++):
$this->_sections['sec2']['rownum'] = $this->_sections['sec2']['iteration'];
$this->_sections['sec2']['index_prev'] = $this->_sections['sec2']['index'] - $this->_sections['sec2']['step'];
$this->_sections['sec2']['index_next'] = $this->_sections['sec2']['index'] + $this->_sections['sec2']['step'];
$this->_sections['sec2']['first']      = ($this->_sections['sec2']['iteration'] == 1);
$this->_sections['sec2']['last']       = ($this->_sections['sec2']['iteration'] == $this->_sections['sec2']['total']);
?> <?php if ($this->_tpl_vars['class'][$this->_sections['sec1']['index']]['c_id'] == $this->_tpl_vars['classselect'][$this->_sections['sec2']['index']]): ?> <?php $this->assign('g', 1); ?>
			<?php endif; ?> <?php endfor; endif; ?> <?php if ($this->_tpl_vars['g'] == 1): ?>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne();" name="b_class[]" id="b_class[]"
				type="checkbox" value="<?php echo $this->_tpl_vars['class'][$this->_sections['sec1']['index']]['c_id']; ?>
" checked="checked"><?php echo $this->_tpl_vars['class'][$this->_sections['sec1']['index']]['c_name']; ?>
</div>
			<?php else: ?>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne();" name="b_class[]" id="b_class[]"
				type="checkbox" value="<?php echo $this->_tpl_vars['class'][$this->_sections['sec1']['index']]['c_id']; ?>
"><?php echo $this->_tpl_vars['class'][$this->_sections['sec1']['index']]['c_name']; ?>
</div>
			<?php endif; ?> <?php endfor; endif; ?></td>
		<tr>
			<td class="td1">小类：</td>
			<td class="td2" id="stype" name="stype"></td>
		</tr>
		<tr>
			<td class="td1">简要：</td>
			<td class="td2"><textarea cols="80" rows="9" name="b_brief"
				id="b_brief"><?php echo $this->_tpl_vars['brand'][0]['b_brief']; ?>
</textarea></td>
		</tr>
		<tr>
			<td class="td1">&nbsp;</td>
			<td class="td2"><input
				style="background-position: -249px -219px" name="sub" id="sub"
				class="btn-submit" value="" title="提交" type="submit"></td>
		</tr>
	</tbody>
</table>
<input type="hidden" value="<?php echo $this->_tpl_vars['brand'][0]['b_id']; ?>
" id="id" name="id">
<input type="hidden" value="<?php echo $this->_tpl_vars['typeselect']; ?>
" id="ssl" name="ssl">
<input type="hidden" name="action" id="action" value="updateBrand" /></form>
<script>
	//chooseOne()函式，參數為觸發該函式的元素本身  
	function chooseOne() {
		$("#stype").html('');
		//先取得同name的chekcBox的集合物件  
		var obj = document.getElementsByName("b_class[]");
		for (i = 0; i < obj.length; i++) {
			//判斷obj集合中的i元素是否為cb，若否則表示未被點選  
			if (obj[i].checked) {
				$.ajax({
					type : "GET",
					url : "/admin.php",
					//data : "action=loadcheckType&cid=" + obj[i].value+ "&sl=" + $("#ssl").val(),
						data : "action=loadch&cid=" + obj[i].value+ "&sl=" + $("#ssl").val(),
					success : function(html) {
						$("#stype").append(html);
					}
				});
			}
		}
	}

	$(document).ready(
			function() {
				chooseOne();
			})
</script>
</body>
</html>