<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./template/default/home/space_share_form.htm', './template/default/common/seccheck.htm', 1347606007, '6', './data/template/6_6_home_space_share_form.tpl.php', './template/yeei_yeeix2', 'home/space_share_form')
;?>
<form id="shareform" name="shareform" action="home.php?mod=spacecp&amp;ac=share&amp;type=link&amp;view=<?php echo $_GET['view'];?>&amp;from=<?php echo $_GET['from'];?>" method="post" autocomplete="off" class="sfm" <?php if($_GET['view'] == 'me') { ?>onsubmit="ajaxpost(this.id, 'return_shareadd')"<?php } ?>>
<p class="mbn c cl"><span id="return_shareadd" class="y xi1"></span>分享网址、视频、音乐、Flash</p>
<p>
<input type="text" name="link" id="share_link" class="px vm" tabindex="1" onfocus="javascript:if('http://'==this.value)this.value='';$('share_desc').style.display='block';" onblur="javascript:if(''==this.value)this.value='http://';" value="http://" />&nbsp;
<button type="submit" name="sharesubmit_btn" id="sharesubmit_btn" class="pn vm" tabindex="3" value="true"><strong>分享</strong></button>
<a href="javascript:;" onclick="showDialog('<strong>如何分享视频？</strong><br/>填写视频所在网页的网址。(不需要填写视频的真实地址)<br/>我们支持的视频网站有：<br/>Youtube、优酷、酷6、Mofile、偶偶视频、56、新浪视频、搜狐视频。<br/><br/><strong>如何分享音乐？</strong><br/>填写音乐文件的地址。(后缀需要是 mp3 或者 wma)<br/><br/><strong>如何分享 Flash？</strong><br/>填写 Flash 文件的地址。(后缀需要是 swf)', 'notice', '分享说明', '', '', '', '');" class="xi2"><img src="<?php echo IMGDIR;?>/faq.gif" alt="faq" class="vm" /> 帮助</a>
</p>
<div id="share_desc" class="cl" style="display: none;">
<p class="mtm mbn">描述</p>
<p><textarea name="general" id="share_general" tabindex="2" rows="3" onkeydown="ctrlEnter(event, 'sharesubmit_btn')" class="pt"></textarea></p>
<?php if(checkperm('seccode') && ($secqaacheck || $seccodecheck)) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm sec"><?php $_G['sechashi'] = !empty($_G['cookie']['sechashi']) ? $_G['sechash'] + 1 : 0;
$sechash = 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'].$_G['sechashi'];
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');
$sectpldefault = $sectpl;
$sectplqaa = str_replace('<hash>', 'qaa'.$sechash, $sectpldefault);
$sectplcode = str_replace('<hash>', 'code'.$sechash, $sectpldefault);
$secshow = !isset($secshow) ? 1 : $secshow;
$sectabindex = !isset($sectabindex) ? 1 : $sectabindex;?><?php
$__STATICURL = STATICURL;$seccheckhtml = <<<EOF

<input name="sechash" type="hidden" value="{$sechash}" />

EOF;
 if($sectpl) { if($secqaacheck) { 
$seccheckhtml .= <<<EOF

{$sectplqaa['0']}验证问答{$sectplqaa['1']}<input name="secanswer" id="secqaaverify_{$sechash}" type="text" autocomplete="off" style="width:100px" class="txt px vm" onblur="checksec('qaa', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updatesecqaa('{$sechash}');doane(event);" class="xi2">换一个</a>
<span id="checksecqaaverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplqaa['2']}<span id="secqaa_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updatesecqaa('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplqaa['3']}

EOF;
 } if($seccodecheck) { 
$seccheckhtml .= <<<EOF

{$sectplcode['0']}验证码{$sectplcode['1']}<input name="seccodeverify" id="seccodeverify_{$sechash}" type="text" autocomplete="off" style="
EOF;
 if($_G['setting']['seccodedata']['type'] != 1) { 
$seccheckhtml .= <<<EOF
ime-mode:disabled;
EOF;
 } 
$seccheckhtml .= <<<EOF
width:100px" class="txt px vm" onblur="checksec('code', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updateseccode('{$sechash}');doane(event);" class="xi2">换一个</a>
<span id="checkseccodeverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplcode['2']}<span id="seccode_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updateseccode('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplcode['3']}

EOF;
 } } 
$seccheckhtml .= <<<EOF


EOF;
?><?php unset($secshow);?><?php if(empty($secreturn)) { ?><?php echo $seccheckhtml;?><?php } ?></div>
<?php } ?>
</div>
<input type="hidden" name="referer" value="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=share&amp;view=me&amp;quickforward=1" />
<input type="hidden" name="sharesubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<?php if($_GET['view'] == 'me') { ?>
<input type="hidden" name="handlekey" value="shareadd" />
<?php } ?>
</form>