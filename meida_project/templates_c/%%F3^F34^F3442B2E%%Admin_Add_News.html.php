<?php /* Smarty version 2.6.26, created on 2011-09-07 08:17:05
         compiled from admin/Admin_Add_News.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="/templates/Content/regiester/style.css" rel="stylesheet"
	type="text/css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['calendar']; ?>
jquery-1.4.3.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['calendar']; ?>
Js/calendar.js"></script>
<link type="text/css" rel="stylesheet"
	href="<?php echo $this->_tpl_vars['calendar']; ?>
Css/calendar.css" />
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
			<td class="td1">新闻标题：<span class="nes">*</span></td>
			<td class="td2"><input id="n_title" name="n_title"
				class="inp ipt-normal" style="width: 450px; font-weight: bold;"
				type="text">&nbsp;&nbsp;是否推荐<input type="checkbox"
				id="n_command" name="n_command" value="1"></td>
		</tr>
		<tr>
			<td class="td1">发布时间：<span class="nes">*</span></td>
			<td class="td2"><input id="n_starttime" name="n_starttime"
				class="inp ipt-normal" style="width: 250px; font-weight: bold;"
				type="text"
				onClick="displayCalendar(this, 'yyyy-mm-dd hh:ii', this, true, '');">
			</td>
		</tr>
		<tr>
			<td class="td1">26字母:</td>
			<td class="td2">
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('A');" name="word" id="word" type="radio" value="A">A</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('B');" name="word" id="word" type="radio" value="B">B</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('C');" name="word" id="word" type="radio" value="C">C</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('D');" name="word" id="word" type="radio" value="D">D</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('E');" name="word" id="word" type="radio" value="E">E</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('F');" name="word" id="word" type="radio" value="F">F</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('G');" name="word" id="word" type="radio" value="G">G</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('H');" name="word" id="word" type="radio" value="H">H</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('I');" name="word" id="word" type="radio" value="I">I</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('J');" name="word" id="word" type="radio" value="J">J</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('K');" name="word" id="word" type="radio" value="K">K</div>
							<div style="float: left; width: 150px"><input
				onclick="chooseOne('L');" name="word" id="word" type="radio" value="L">L</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('M');" name="word" id="word" type="radio" value="M">M</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('N');" name="word" id="word" type="radio" value="N">N</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('O');" name="word" id="word" type="radio" value="O">O</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('P');" name="word" id="word" type="radio" value="P">P</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('Q');" name="word" id="word" type="radio" value="Q">Q</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('R');" name="word" id="word" type="radio" value="R">R</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('S');" name="word" id="word" type="radio" value="S">S</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('T');" name="word" id="word" type="radio" value="T">T</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('U');" name="word" id="word" type="radio" value="U">U</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('V');" name="word" id="word" type="radio" value="V">V</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('W');" name="word" id="word" type="radio" value="W">W</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('S');" name="word" id="word" type="radio" value="S">S</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('Y');" name="word" id="word" type="radio" value="Y">Y</div>
			<div style="float: left; width: 150px"><input
				onclick="chooseOne('Z');" name="word" id="word" type="radio" value="Z">Z</div>

			</td>
		</tr>
		<tr>
			<td class="td1">品牌:</td>
			<td class="td2" id="brandlist" name="brandlist">请先选择26字母</td>
		</tr>
		<tr>
			<td class="td1">大类：<span class="nes">*</span></td>
			<td class="td2"><select class="inp ipt-normal" id="n_class"
				name="n_class" style="width: 250px; font-weight: bold;">
				<option value="0">请选择大类</option>
				<?php unset($this->_sections['sec1']);
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
?>
				<option value="<?php echo $this->_tpl_vars['class'][$this->_sections['sec1']['index']]['c_id']; ?>
"><?php echo $this->_tpl_vars['class'][$this->_sections['sec1']['index']]['c_name']; ?>
</option>
				<?php endfor; endif; ?>
			</select></td>
		</tr>
		<tr>
			<td class="td1">小类：<span class="nes">*</span></td>
			<td class="td2" id="stype"><select class="inp ipt-normal"
				id="n_ctype" name="n_ctype" style="width: 250px; font-weight: bold;">
				<option value="0">请选择小类</option>
			</select></td>
		</tr>
		<tr style="background-color: #ebebeb">
			<td class="td1">大图片：</td>
			<td class="td2"><input id="n_bimgs" name="n_bimgs"
				class="inp ipt-normal" style="width: 250px; font-weight: bold;"
				type="file">&nbsp;&nbsp;300*200</td>
		</tr>
		<tr style="background-color: #ebebeb">
			<td class="td1">大图片标题：</td>
			<td class="td2"><input id="n_pictitle" name="n_pictitle"
				class="inp ipt-normal" style="width: 450px; font-weight: bold;"
				type="text"></td>
		</tr>
		<tr>
			<td class="td1">小图片：</td>
			<td class="td2"><input id="n_simgs" name="n_simgs"
				class="inp ipt-normal" style="width: 250px; font-weight: bold;"
				type="file">&nbsp;&nbsp;50*50</td>
		</tr>
		<tr>
			<td class="td1">城市：<span class="nes">*</span></td>
			<td class="td2"><select id="n_country" name="n_country"
				class="inp ipt-normal" style="width: 250px; font-weight: bold;">
				<option value="全国">全国</option>
				<option value="上海">上海</option>
				<option value="北京">北京</option>
				<option value="重慶">重慶</option>
				<option value="広州">広州</option>
				<option value="天津">天津</option>
				<option value="华北">华北</option>
				<option value="华南">华南</option>
				<option value="华东">华东</option>
				<option value="华中">华中</option>
				<option value="东北">东北</option>
				<option value="西北">西北</option>
				<option value="西南">西南</option>
				<option value="新疆">新疆</option>
				<option value="香港">香港</option>
				<option value="海外">海外</option>
				<option value="日本">日本</option>

			</select></td>
		</tr>
		<tr>
			<td class="td1">keyword：<span class="nes">*</span></td>
			<td class="td2"><input id="n_keyword" name="n_keyword"
				class="inp ipt-normal" style="width: 500px; font-weight: bold;"
				type="text"></td>
		</tr>
		<tr>
			<td class="td1">简介描述：<span class="nes">*</span></td>
			<td class="td2"><textarea name="n_context" cols="27" rows="4"
				class="inp ipt-normal" id="n_context"
				style="height: auto; font-weight: bold;"></textarea></td>
		</tr>
		<tr>
			<td class="td1">新闻分类：<span class="nes">*</span></td>
			<td class="td2"><input type="radio" name="site" value="A"
				style="margin-bottom: 20px;">企業動向<br />
			<input type="radio" name="site" value="B">業界最前線<br />
			<input type="radio" name="site" value="C">広告・販促<br />
			<input type="radio" name="site" value="D"
				style="margin-bottom: 20px;">マクロ<br />
			<input type="radio" name="site" value="E">レポート<br />
			</td>
		</tr>

		<tr>
			<td class="td1" style="vertical-align: top">详细内容：<span
				class="nes">*</span></td>
			<td class="td2"><?php echo $this->_tpl_vars['fck']; ?>
</td>
		</tr>
		<tr>
			<td class="td1" style="vertical-align: top">只有会员查看：<span
				class="nes">*</span></td>
			<td class="td2"><input type="radio" name="member" value="1"
				checked>是 &nbsp;&nbsp;&nbsp; <input type="radio"
				name="member" value="2">否</td>
		</tr>
		<tr>
			<td class="td1">状态：<span class="nes">*</span></td>
			<td class="td2"><select id="n_status" name="n_status"
				class="inp ipt-normal" style="width: 250px; font-weight: bold;">
				<option value="1">开启</option>
				<option value="2">停用</option>
			</select></td>
		</tr>
		<tr>
			<td class="td1">&nbsp;</td>
			<td class="td2"><input
				style="background-position: -249px -219px" name="sub" id="sub"
				class="btn-submit" value="" title="提交" type="submit"></td>
		</tr>
	</tbody>
</table>

<input type="hidden" name="action" id="action" value="addnew" /></form>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['public']; ?>
js/select.js">
	
</script>
<script type="text/javascript">
	function chooseOne(word) {
		$("#brandlist").html('');
		$.ajax({
			type : "POST",
			url : "/admin.php",
			data : "action=getBrandList&_p="+word,
			success : function(msg) {
				$("#brandlist").html(msg);
			}
		});
	}
</script>
</body>
</html>