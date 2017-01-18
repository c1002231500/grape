<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
0
|| checktplrefresh('data/diy/./template/yeei_yeeix2//portal/index.htm', './template/yeei_yeeix2/common/header.htm', 1347606566, 'diy', './data/template/6_diy_portal_index.tpl.php', 'data/diy/./template/yeei_yeeix2/', 'portal/index')
|| checktplrefresh('data/diy/./template/yeei_yeeix2//portal/index.htm', './template/yeei_yeeix2/common/footer.htm', 1347606566, 'diy', './data/template/6_diy_portal_index.tpl.php', 'data/diy/./template/yeei_yeeix2/', 'portal/index')
|| checktplrefresh('data/diy/./template/yeei_yeeix2//portal/index.htm', './template/default/common/header_common.htm', 1347606566, 'diy', './data/template/6_diy_portal_index.tpl.php', 'data/diy/./template/yeei_yeeix2/', 'portal/index')
|| checktplrefresh('data/diy/./template/yeei_yeeix2//portal/index.htm', './template/default/common/pubsearchform.htm', 1347606566, 'diy', './data/template/6_diy_portal_index.tpl.php', 'data/diy/./template/yeei_yeeix2/', 'portal/index')
;
block_get('361,362,364,363,390,365,366,392,393,391,372,367,368,370,371,369,373,374,375,376,377,378,379,380,381,395,382,383,384,385,386,394,387,388,389');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2012 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { ?><?php $_GET['diy'] = '';?><?php } if(!isset($topic)) { ?><?php $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
</head>
<LINK href="template/yeei_yeeix2/yeei/yeeicn_style.css" type=text/css rel=stylesheet>
<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?>" onKeyDown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { ?><?php
$__STATICURL = STATICURL;$diynav = <<<EOF

<a id="diy-tg" href="javascript:openDiy();" title="打开 DIY 面板" class="xi1 xw1" onMouseMove="showMenu(this.id)"><img src="{$__STATICURL}image/diy/panel-toggle.png" alt="DIY" /></a>
<div id="diy-tg_menu" style="display: none;">
<ul>
<li><a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();" class="xi2">简洁模式</a></li>
<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">高级模式</a></li>
</ul>
</div>

EOF;
?>
<?php } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a>
</div>
<?php } ?>

<div id="toptb" class="cl">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<div class="wp">
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?>
<a href="javascript:;" onClick="widthauto(this)"><?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?></a>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">切换风格</a><?php } if(check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>
</div>
</div>
</div>


<?php if(!IS_ROBOT) { if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onClick="extstyle('')" title="默认"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onClick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } ?>

<div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if($_G['uid']) { ?>
<ul><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
请先<br /><a class="xi2" href="member.php?mod=connect"><strong>完善帐号信息</strong></a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>绑定已有帐号</strong></a><br />后使用快捷导航
</div>
<?php } else { ?>
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } ?>
</div>
<?php } ?><?php echo adshow("headerbanner/wp a_h");?><div id="hd">
<div class="wp">
<div class="hdc cl"><?php $mnid = getcurrentnav();?><h2><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="./" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h2>

<?php if($_G['uid']) { ?>
<div id="um">
<div class="avt y"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo avatar($_G[uid],small);?></a></div>
<p>
<strong class="vwmy<?php if($_G['setting']['connect']['allow'] && $_G['member']['conisbind']) { ?> qq<?php } ?>"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间"><?php echo $_G['member']['username'];?></a></strong>
<?php if($_G['group']['allowinvisible']) { ?>
<span id="loginstatus">
<a id="loginstatusid" href="member.php?mod=switchstatus" title="切换在线状态" onClick="ajaxget(this.href, 'loginstatus');return false;" class="xi2"></a>
</span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?><a href="home.php?mod=spacecp">设置</a>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>消息</a>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=notice" id="myprompt"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>提醒<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if($_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?><span class="pipe">|</span><a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">进行中的任务</a><?php } if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<span class="pipe">|</span><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a>
<?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<span class="pipe">|</span><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a>
<?php } if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
<span class="pipe">|</span><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank">云平台</a>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<span class="pipe">|</span><a href="admin.php" target="_blank">管理中心</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</p>
<p>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?><?php $upgradecredit = $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != 999999999 ? $_G['group']['groupcreditslower'] - $_G['member']['credits'] : false;?><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1" id="extcreditmenu"<?php if(!$_G['setting']['bbclosed']) { ?> onMouseOver="delayShow(this, showCreditmenu);" class="showmenu"<?php } ?>>积分: <?php echo $_G['member']['credits'];?></a>
<span class="pipe">|</span>用户组: <a href="home.php?mod=spacecp&amp;ac=usergroup"<?php if($upgradecredit !== 'false') { ?> id="g_upmine" class="xi2" onMouseOver="delayShow(this, showUpgradeinfo)"<?php } ?>><?php echo $_G['group']['grouptitle'];?></a>
</p>
</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<p>
<strong><a id="loginuser" class="noborder"><?php echo htmlspecialchars($_G['cookie']['loginuser']); ?></a></strong>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">激活</a>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</p>
<?php } elseif(!$_G['connectguest']) { include template('member/login_simple'); } else { ?>
<div id="um">
<div class="avt y"><?php echo avatar(0,small);?></div>
<p>
<strong class="vwmy qq"><?php echo $_G['member']['username'];?></strong>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</p>
<p>
<a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">积分: 0</a>
<span class="pipe">|</span>用户组: QQ 登录用户
</p>
</div>
<?php } ?>
</div>

<div id="nv">
                    
                    <div class="nv_r"></div>
<a href="javascript:;" id="qmenu" onMouseOver="showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});">快捷导航</a>
                    <div class="nv_l"></div>
<ul><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
</div>
<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?php echo $module['url'];?></li>
 <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?>
<div id="mu" class="cl">
<?php if($_G['setting']['subnavs']) { if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
<?php echo $subnav;?>
</ul>
<?php } } } ?>
</div><?php echo adshow("subnavbanner/a_mu");?><?php if($_G['setting']['search']) { ?><?php $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>scbar_narrow <?php } ?>cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { ?><?php $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_icon_td"></td>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" x-webkit-speech speech /></td>
<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="showmenu xg1 xs2" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2 xs2">搜索</strong></button></td>
<td class="scbar_hot_td">
<div id="scbar_hot">
<?php if($_G['setting']['srchhotkeywords']) { ?>
<strong class="xw1">热搜: </strong><?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if($val=trim($val)) { ?><?php $valenc=rawurlencode($val);?><?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF


EOF;
 if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF

<a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } 
$srchhotkeywords[] .= <<<EOF


EOF;
?>
<?php } } echo implode('', $srchhotkeywords);; } ?>
</div>
</td>
</tr>
</table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } ?></div>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } ?>

<div id="wp" class="wp"><!--
YEEIX1.5免费版发布，本站原创制作，未经许可禁止出售，发布，以及乱改版权
转载请注明 www.yeei.cn
                                                               YEEI.CN -->






<!--[diy=diy8]--><div id="diy8" class="area"><div id="framegmgDU1" class=" frame move-span cl frame-1"><div id="framegmgDU1_left" class="column frame-1-c"><div id="framegmgDU1_left_temp" class="move-span temp"></div><?php block_display('361');?></div></div></div><!--[/diy]-->

<style id="diy_style" type="text/css">#portal_block_384 { margin:0px !important;border:0px !important;}#portal_block_384 .dxb_bc { margin:0px !important;}#frameqa84d8 { margin:0px !important;border:0px !important;}#frameGcZFfn { margin:0px !important;border:0px !important;}#framekl0rkZ { margin:0px !important;border:0px !important;}#framegmgDU1 { margin:0px !important;border:0px !important;}#portal_block_361 { margin:8px 0px 0px !important;border:0px !important;}#portal_block_361 .dxb_bc { margin:0px !important;}#framejzMzBR { margin:0px !important;border:0px !important;}#portal_block_362 { margin:0px !important;border:0px !important;}#portal_block_362 .dxb_bc { margin:0px !important;}#frame7Nv82W { margin:0px !important;border:0px !important;}#portal_block_363 { margin:0px !important;border:#000000 0px !important;}#portal_block_363 .dxb_bc { margin:0px !important;}#portal_block_364 { margin:0px !important;border:0px !important;}#portal_block_364 .dxb_bc { margin:0px !important;}#portal_block_365 { margin:0px !important;border:#000000 0px !important;}#portal_block_365 .dxb_bc { margin:0px 10px !important;font-size:14px !important;}#portal_block_366 { margin:0px !important;border:#000000 0px !important;}#portal_block_366 .dxb_bc { margin:0px 10px !important;font-size:14px !important;}#frame99LR33 { margin:0px !important;border:0px !important;}#frameb2X72W { margin:0px !important;border:0px !important;}#portal_block_367 { margin:0px !important;border:0px !important;}#portal_block_367 .dxb_bc { margin:0px !important;}#frameymCNaj { margin:0px !important;border:0px !important;}#frameE8uJu7 { margin:0px !important;border:0px !important;}#portal_block_368 { margin:0px !important;border:0px !important;}#portal_block_368 .dxb_bc { margin:0px !important;}#portal_block_369 { margin:0px !important;border:0px !important;}#portal_block_369 .dxb_bc { margin:0px !important;}#frame4Dk4Sd { margin:0px !important;border:0px !important;}#portal_block_370 { margin:0px !important;border:0px !important;}#portal_block_370 .dxb_bc { margin:0px !important;}#portal_block_371 { margin:0px !important;border:#000000 0px !important;}#portal_block_371 .dxb_bc { margin:0px !important;}#frameO564pt { margin:0px !important;border:#000000 0px !important;}#portal_block_372 { margin:0px !important;border:0px !important;}#portal_block_372 .dxb_bc { margin:0px !important;}#frameocfpVG { margin:0px !important;border:0px !important;}#portal_block_373 { margin:0px !important;border:0px !important;}#portal_block_373 .dxb_bc { margin:0px !important;}#portal_block_374 { margin:0px !important;border:0px !important;}#portal_block_374 .dxb_bc { margin:0px !important;}#frame3VBm7e { margin:0px !important;border:0px !important;}#portal_block_375 { margin:0px !important;border:0px !important;}#portal_block_375 .dxb_bc { margin:0px !important;}#portal_block_376 { margin:0px !important;border:0px !important;}#portal_block_376 .dxb_bc { margin:0px !important;}#frameuBUua7 { margin:0px !important;border:#000000 0px !important;}#portal_block_377 { margin:0px !important;border:0px !important;}#portal_block_377 .dxb_bc { margin:0px !important;}#portal_block_378 { margin:0px !important;border:0px !important;}#portal_block_378 .dxb_bc { margin:0px !important;}#framehv1Bw2 { margin:0px !important;border:0px !important;}#portal_block_379 { margin:0px !important;border:0px !important;}#portal_block_379 .dxb_bc { margin:0px !important;}#portal_block_380 { margin:0px !important;border:0px !important;}#portal_block_380 .dxb_bc { margin:0px !important;}#portal_block_381 { margin:0px !important;border:0px !important;}#portal_block_381 .dxb_bc { margin:0px !important;}#frame7xnxPg { margin:0px !important;border:0px !important;}#frameknS5ee { margin:0px !important;border:0px !important;}#frame6UCNK5 { margin:0px !important;border:0px !important;}#portal_block_382 { margin:0px !important;border:0px !important;}#portal_block_382 .dxb_bc { margin:0px !important;}#portal_block_383 { margin:0px !important;border:0px !important;}#portal_block_383 .dxb_bc { margin:0px !important;}#frameqMu7uU { margin:0px !important;border:0px !important;}#frame66nBng { margin:0px !important;border:0px !important;}#framed2I4dD { margin:0px !important;border:0px !important;}#portal_block_385 { margin:0px !important;border:#000000 0px !important;}#portal_block_385 .dxb_bc { margin:0px !important;}#frameE12esK { margin:0px !important;border:0px !important;}#portal_block_386 { margin:0px !important;border:0px !important;}#portal_block_386 .dxb_bc { margin:0px !important;}#frame2hGG3a { margin:0px !important;border:0px !important;}#portal_block_387 { margin:0px !important;border:0px !important;}#portal_block_387 .dxb_bc { margin:0px !important;}#portal_block_388 { margin:0px !important;border:0px !important;}#portal_block_388 .dxb_bc { margin:0px !important;}#frame93Bw49 { margin:0px !important;border:0px !important;}#portal_block_389 { margin:0px !important;border:0px !important;}#portal_block_389 .dxb_bc { margin:0px !important;}#portal_block_390 { margin:0px !important;border:0px !important;}#portal_block_390 .dxb_bc { margin:0px !important;}#portal_block_391 { margin:0px !important;border:0px !important;}#portal_block_391 .dxb_bc { margin:0px !important;}#portal_block_392 { margin:0px !important;border:0px !important;}#portal_block_392 .dxb_bc { margin:0px !important;}#portal_block_393 { margin:0px !important;border:0px !important;}#portal_block_393 .dxb_bc { margin:0px !important;}#frame2E232X { margin:0px !important;border:0px !important;}#portal_block_395 { margin:0px !important;border:0px !important;}#portal_block_395 .dxb_bc { margin:0px !important;}</style>
<link href="template/yeei_yeeix2/yeei/index.css" type=text/css rel=stylesheet>
<div class="wp">

<div class="index_i">
<div class="index_ad1"><!--[diy=diy31]--><div id="diy31" class="area"></div><!--[/diy]--></div>
<div class="index_top_r">




<div class="index_top_r_l">
<div class="brbtop">
<div>
<p></p></div></div>
<div class="brbcontent">
<div class="flv_hd"><!--[diy=diy4]--><div id="diy4" class="area"><div id="framejzMzBR" class=" frame move-span cl frame-1"><div id="framejzMzBR_left" class="column frame-1-c"><div id="framejzMzBR_left_temp" class="move-span temp"></div><?php block_display('362');?></div></div></div><!--[/diy]--></div>
<div class="flv_hd_b">
<div class="flv_hd_b2">
<div class="flv_hd_b2_nr">
<!--[diy=diy5]--><div id="diy5" class="area"><div id="frame7Nv82W" class=" frame move-span cl frame-1"><div id="frame7Nv82W_left" class="column frame-1-c"><div id="frame7Nv82W_left_temp" class="move-span temp"></div><?php block_display('364');?><?php block_display('363');?></div></div></div><!--[/diy]-->
</div>
</div>
</div>

 </div>
 <div class="brbbot">
<div>
<p></p></div></div>
</div>


</div>
<div class="index_top_l">	
<div class="brbtop">
<div>
<p></p></div></div>
<div class="brbcontent">
<h3></h3>
<div class="index_top_l_1">	

<!--[diy=diy3]--><div id="diy3" class="area"><div id="framekl0rkZ" class=" frame move-span cl frame-1"><div id="framekl0rkZ_left" class="column frame-1-c"><div id="framekl0rkZ_left_temp" class="move-span temp"></div><?php block_display('390');?></div></div></div><!--[/diy]-->
</div>
<div class="index_top_l_2">	
<!--[diy=diy6]--><div id="diy6" class="area"><div id="frameqa84d8" class=" frame move-span cl frame-1"><div id="frameqa84d8_left" class="column frame-1-c"><div id="frameqa84d8_left_temp" class="move-span temp"></div><?php block_display('365');?></div></div></div><!--[/diy]-->

</div>
<div class="index_top_l_3">	
<!--[diy=diy7]--><div id="diy7" class="area"><div id="frameGcZFfn" class=" frame move-span cl frame-1"><div id="frameGcZFfn_left" class="column frame-1-c"><div id="frameGcZFfn_left_temp" class="move-span temp"></div><?php block_display('366');?></div></div></div><!--[/diy]-->

</div></div>
 <div class="brbbot">
<div>
<p></p></div></div>
</div>
<div class="index_top_r_r">
<div class="index_top_r_t">
<div class="index_top_r_t1"></div>
<span></span>24小时热点
<div class="index_top_r_t2"></div>
</div>

<div class="index_top_r_nr">
<!--[diy=diy2]--><div id="diy2" class="area"><div id="frame99LR33" class=" frame move-span cl frame-1"><div id="frame99LR33_left" class="column frame-1-c"><div id="frame99LR33_left_temp" class="move-span temp"></div><?php block_display('392');?><?php block_display('393');?><?php block_display('391');?></div></div></div><!--[/diy]-->

</div>	
</div>



</div>

<div class="bbs_q">
<div class="bbs_q_l">
<div class="bbs_top" >
<div class="bbs_top1" >
</div>
<div class="s_t_h3">社区动态</div>

<div class="bbs_top2" >
</div>
</div>
<div class="bbs_nr">
<div class="bbs_nr_l">
<div class="bbs_nr_l1">

<!--[diy=diy10]--><div id="diy10" class="area"><div id="frameb2X72W" class=" frame move-span cl frame-1"><div id="frameb2X72W_left" class="column frame-1-c"><div id="frameb2X72W_left_temp" class="move-span temp"></div><?php block_display('372');?><?php block_display('367');?></div></div></div><!--[/diy]-->
</div>
<div class="bbs_nr_l2">
<h3>今日运动榜<span>/运动场</span></h3>
<!--[diy=diy12]--><div id="diy12" class="area"><div id="frameymCNaj" class=" frame move-span cl frame-1"><div id="frameymCNaj_left" class="column frame-1-c"><div id="frameymCNaj_left_temp" class="move-span temp"></div><?php block_display('368');?></div></div></div><!--[/diy]-->
</div>
<div class="bbs_nr_l3">
<!--[diy=diy11]--><div id="diy11" class="area"></div><!--[/diy]-->
</div>

</div>
<div class="bbs_nr_r">
<div class="bbs_nr_r1 ">

<!--[diy=diy13]--><div id="diy13" class="area"><div id="frame4Dk4Sd" class=" frame move-span cl frame-1"><div id="frame4Dk4Sd_left" class="column frame-1-c"><div id="frame4Dk4Sd_left_temp" class="move-span temp"></div><?php block_display('370');?><?php block_display('371');?></div></div></div><!--[/diy]-->

</div>




<div class="bbs_nr_r2">
<!--[diy=diy14]--><div id="diy14" class="area"><div id="frameO564pt" class=" frame move-span cl frame-1"><div id="frameO564pt_left" class="column frame-1-c"><div id="frameO564pt_left_temp" class="move-span temp"></div></div></div><div id="frameE8uJu7" class=" frame move-span cl frame-1"><div id="frameE8uJu7_left" class="column frame-1-c"><div id="frameE8uJu7_left_temp" class="move-span temp"></div><?php block_display('369');?></div></div></div><!--[/diy]-->

</div>

</div>
</div>


</div>
<div class="bbs_q_r">



<DIV class="brbtop">
<DIV>
<P></P></DIV></DIV>
<DIV class="brbcontent">
<h3>社区新贴</h3>
<!--[diy=diy15]--><div id="diy15" class="area"><div id="frameocfpVG" class=" frame move-span cl frame-1"><div id="frameocfpVG_left" class="column frame-1-c"><div id="frameocfpVG_left_temp" class="move-span temp"></div><?php block_display('373');?><?php block_display('374');?></div></div></div><!--[/diy]-->
 </div>
 <DIV class="brbbot">
<DIV>
<P></P></DIV></DIV>


</div>


</div>

<div class="show_q">
<div class="show_q_l">
<div class="show_top">
<div class="show_top1"></div>
<div class="s_t_h3">家园推荐</div>


<div class="s_t_h3_r2">
<form action="home.php" method="get">
<li class="nl"><em>性别:</em></li>
<li style="margin-top:1px">
<select id="gender" name="gender">
<option value="0">任意</option>
<option value="1">男</option>
<option value="2" selected="selected">女</option>
</select>
</li>
<li class="nl" style="margin-left:5px"><em>年龄:</em></li>
<li>
<input type="text" name="startage" value="18" size="1" class="yonghu" /> ~ <input type="text" name="endage" value="23" size="1" class="yonghu" />

</li>
<li><button type="submit" class="pnan"><em>查找</em></button>
<a href="home.php?mod=spacecp&amp;ac=search&amp;all=yes" class="lit">高级</a>
</li>
<input type="hidden" name="mod" value="spacecp" />
<input type="hidden" name="ac" value="search" />
<input type="hidden" name="searchsubmit" value="true" />
<input type="hidden" name="type" value="base" />
</form>
</div>
</div>
<div class="show_nr">
<div class="show_nr_l">

<div class="show_nr_ls1" >
<!-- www.yeei.cn BY 晴春 -->

<div class="nris">

<div class="show_nr_l1" >
<h3>情感日记<span>EMOTION</span></h3>
<!--[diy=diy17]--><div id="diy17" class="area"><div id="frame3VBm7e" class=" frame move-span cl frame-1"><div id="frame3VBm7e_left" class="column frame-1-c"><div id="frame3VBm7e_left_temp" class="move-span temp"></div><?php block_display('375');?><?php block_display('376');?></div></div></div><!--[/diy]-->
</div>
<div class="show_nr_l2">
<h3>生活助理<span>LIFE</span></h3>
<!--[diy=diy18]--><div id="diy18" class="area"><div id="frameuBUua7" class=" frame move-span cl frame-1"><div id="frameuBUua7_left" class="column frame-1-c"><div id="frameuBUua7_left_temp" class="move-span temp"></div><?php block_display('377');?><?php block_display('378');?></div></div></div><!--[/diy]-->
</div>
</div>

<!-- www.yeei.cn BY 晴春 -->


</div>


</div>








<div class="show_nr_r">
<div class="show_nr_r1">

<!--[diy=diy20]--><div id="diy20" class="area"><div id="framehv1Bw2" class=" frame move-span cl frame-1"><div id="framehv1Bw2_left" class="column frame-1-c"><div id="framehv1Bw2_left_temp" class="move-span temp"></div><?php block_display('379');?></div></div><div id="frame7xnxPg" class=" frame move-span cl frame-1"><div id="frame7xnxPg_left" class="column frame-1-c"><div id="frame7xnxPg_left_temp" class="move-span temp"></div><?php block_display('380');?></div></div></div><!--[/diy]-->
</div>
<div class="show_nr_r2">
<div class="show_h3">
<li class="dx">相册推荐</li>
<li><a href="home.php?mod=space&amp;uid=1&amp;do=album&amp;view=we">查看更多</a></li>

</div>
<!--[diy=diy21]--><div id="diy21" class="area"><div id="frameknS5ee" class=" frame move-span cl frame-1"><div id="frameknS5ee_left" class="column frame-1-c"><div id="frameknS5ee_left_temp" class="move-span temp"></div><?php block_display('381');?></div></div></div><!--[/diy]-->
</div>
</div>
</div>


</div>
<div class="show_q_r">

<DIV class="brbtops">
<span class="xq_fb"><a href="home.php?mod=space&amp;do=doing&amp;fchannel=xmenum">写心情</a></span>
</DIV>
<DIV class="brbcontent">
<div class="show_q_r2">
<h3></h3>
<DIV class="scroll"><!--[diy=diy25]--><div id="diy25" class="area"><div id="frame2E232X" class=" frame move-span cl frame-1"><div id="frame2E232X_left" class="column frame-1-c"><div id="frame2E232X_left_temp" class="move-span temp"></div><?php block_display('395');?></div></div></div><!--[/diy]--></DIV>

</div>
<div class="show_q_r1">
<h3>活跃博客</h3>
<!--[diy=diy26]--><div id="diy26" class="area"><div id="frame6UCNK5" class=" frame move-span cl frame-1"><div id="frame6UCNK5_left" class="column frame-1-c"><div id="frame6UCNK5_left_temp" class="move-span temp"></div><?php block_display('382');?></div></div></div><!--[/diy]--></div>
 </div>
 <DIV class="brbbot">
<DIV>
<P></P></DIV></DIV>


</div>


</div>
<div class="group_q">
<div class="group_l">
<div class="group_l_t">
<div class="group_t_l"><h3>群组推荐</h3></div>

<div class="group_t_r">
<li><a href="group.php?gid=3">影音</a></li>
<li><a href="group.php?gid=4">情感</a></li>
<li><a href="group.php?gid=5">生活</a></li>
<li><a href="group.php?gid=6">休闲</a></li>
<li><a href="group.php?gid=7">游戏</a></li>
<li><a href="group.php?gid=8">体育</a></li>
<li style="background:none"><a href="group.php" style="color:#FF0000;">更多</a></li>
</div>


<div class="group_l_t1"></div>
<div class="group_l_t2"></div></div>
<div class="group_l_nr">
<div class="group_l_nr1">
<!--[diy=diy23]--><div id="diy23" class="area"><div id="frameqMu7uU" class=" frame move-span cl frame-2-1"><div id="frameqMu7uU_left" class="column frame-2-1-l"><div id="frameqMu7uU_left_temp" class="move-span temp"></div><?php block_display('383');?></div><div id="frameqMu7uU_center" class="column frame-2-1-r"><div id="frameqMu7uU_center_temp" class="move-span temp"></div><?php block_display('384');?></div></div></div><!--[/diy]-->
</div>
<div class="group_l_nr2">
<div class="group_lh3">
<ul id="bg">
<LI class="selectTag" id="new2" onmouseover="this.className='selectTag';$('top2').className='';$('newuserlist2').style.display='block';$('topuserlist2').style.display='none';">热门群组</LI>
<LI id="top2" onmouseover="this.className='selectTag';$('new2').className='';$('topuserlist2').style.display='block';$('newuserlist2').style.display='none';">最新加入</LI>
</ul>
</div>

<div class="group_l_nr2s">
<div class="brbtop">
<div>
<p></p></div></div>
<div class="brbcontent">
<div  id="newuserlist2" style="DISPLAY: block">
<!--[diy=diy24]--><div id="diy24" class="area"><div id="framed2I4dD" class=" frame move-span cl frame-1"><div id="framed2I4dD_left" class="column frame-1-c"><div id="framed2I4dD_left_temp" class="move-span temp"></div><?php block_display('385');?></div></div></div><!--[/diy]-->
</div>
<div  id="topuserlist2" style="DISPLAY: none">
<!--[diy=diy28]--><div id="diy28" class="area"><div id="frameE12esK" class=" frame move-span cl frame-1"><div id="frameE12esK_left" class="column frame-1-c"><div id="frameE12esK_left_temp" class="move-span temp"></div><?php block_display('386');?></div></div></div><!--[/diy]-->
</div>
 </div>
 <div class="brbbot">
<div>
<p></p></div></div>

</div>

</div>

</div>

</div>
<div class="group_c">
<div class="gr_h3"><h3>群组图文</h3></div>

<div class="group_c_nr">
<!--[diy=diy27]--><div id="diy27" class="area"><div id="frame66nBng" class=" frame move-span cl frame-1"><div id="frame66nBng_left" class="column frame-1-c"><div id="frame66nBng_left_temp" class="move-span temp"></div><?php block_display('394');?></div></div></div><!--[/diy]-->
</div>
<div class="gr_bot"></div>
</div>
<div class="group_r">
<DIV class="brbtop">
<DIV>
<P></P></DIV></DIV>
<DIV class="brbcontent">

<h3>更新动态</h3>
<div class="group_r_nr">
<!--[diy=diy29]--><div id="diy29" class="area"><div id="frame2hGG3a" class=" frame move-span cl frame-1"><div id="frame2hGG3a_left" class="column frame-1-c"><div id="frame2hGG3a_left_temp" class="move-span temp"></div><?php block_display('387');?><?php block_display('388');?></div></div></div><!--[/diy]-->

</div>
 </div>
 <DIV class="brbbot">
<DIV>
<P></P></DIV></DIV>
</div>
<div class="index_ad1"><!--[diy=diy32]--><div id="diy32" class="area"></div><!--[/diy]--></div>


</div>
<div class="yeeiyq">
<div class="yeeiyq_t">
<h3>合作伙伴</h3>

<div class="yeeiyq_t1"></div>
<div class="yeeiyq_t2"></div></div>
<DIV class="brbcontent">
<div class="yeei_nrss">
<!--[diy=diy30]--><div id="diy30" class="area"><div id="frame93Bw49" class=" frame move-span cl frame-1"><div id="frame93Bw49_left" class="column frame-1-c"><div id="frame93Bw49_left_temp" class="move-span temp"></div><?php block_display('389');?></div></div></div><!--[/diy]-->
</div>
 </div>
 <DIV class="brbbot">
<DIV>
<P></P></DIV></DIV>
</div>
</div>
<script type="text/javascript">
function H$(i) {return document.getElementById(i)}
function H$$(c, p) {return p.getElementsByTagName(c)}
var slider = function () {
function init (o) {
this.id = o.id;
this.at = o.auto ? o.auto : 3;
this.o = 0;
this.pos();
}
init.prototype = {
pos : function () {
clearInterval(this.__b);
this.o = 0;
var el = H$(this.id), li = H$$('li', el), l = li.length;
var _t = li[l-1].offsetHeight;
var cl = li[l-1].cloneNode(true);
cl.style.opacity = 0; cl.style.filter = 'alpha(opacity=0)';
el.insertBefore(cl, el.firstChild);
el.style.top = -_t + 'px';
this.anim();
},
anim : function () {
var _this = this;
this.__a = setInterval(function(){_this.animH()}, 20);
},
animH : function () {
var _t = parseInt(H$(this.id).style.top), _this = this;
if (_t >= -1) {
clearInterval(this.__a);
H$(this.id).style.top = 0;
var list = H$$('li',H$(this.id));
H$(this.id).removeChild(list[list.length-1]);
this.__c = setInterval(function(){_this.animO()}, 20);
//this.auto();
}else {
var __t = Math.abs(_t) - Math.ceil(Math.abs(_t)*.07);
H$(this.id).style.top = -__t + 'px';
}
},
animO : function () {
this.o += 2;
if (this.o == 100) {
clearInterval(this.__c);
H$$('li',H$(this.id))[0].style.opacity = 1;
H$$('li',H$(this.id))[0].style.filter = 'alpha(opacity=100)';
this.auto();
}else {
H$$('li',H$(this.id))[0].style.opacity = this.o/100;
H$$('li',H$(this.id))[0].style.filter = 'alpha(opacity='+this.o+')';
}
},
auto : function () {
var _this = this;
this.__b = setInterval(function(){_this.pos()}, this.at*1000);
}
}
return init;
}();
</script>
<script type="text/javascript">
new slider({id:'slider'})
</script>
<div class="fg" style="margin-bottom:10px"></div>	</div>
<?php if(empty($topic) || ($topic['usefooter'])) { ?><?php $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { ?><?php $focus = $_G['cache']['focus']['data'][$focusid];?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $focusid;?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
<h2><?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?></h2>
</div>
<div class="bm_c">
<dl class="xld cl bbda">
<dt><a href="<?php echo $focus['url'];?>" class="xi2" target="_blank"><?php echo $focus['subject'];?></a></dt>
<?php if($focus['image']) { ?>
<dd class="m"><a href="<?php echo $focus['url'];?>" target="_blank"><img src="<?php echo $focus['image'];?>" alt="<?php echo $focus['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $focus['summary'];?></dd>
</dl>
<p class="ptn hm"><a href="<?php echo $focus['url'];?>" class="xi2" target="_blank">查看 &raquo;</a></p>
</div>
</div>
</div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
<div id="ft" class="wp cl">
<div id="flk" style="text-align:center">
<p>
<a href="forum.php">社区首页</a><span class="pipe">|</span>
<a href="home.php">家园首页</a><span class="pipe">|</span>
<a href="group.php">群组首页</a><span class="pipe">|</span><?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile'))) { if($nav['id'] == 'mobile' && $_G['setting']['mobile']['allowmobile'] != 1) { ?><?php continue;?><?php } ?><?php echo $nav['code'];?><span class="pipe">|</span><?php } } ?>
<strong><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></strong>
<?php if($_G['setting']['icp']) { ?>( <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a> )<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?>
</p>
<p>
GMT<?php echo $_G['timenow']['offset'];?>, <?php echo $_G['timenow']['time'];?>
<span id="debuginfo">
<?php if(debuginfo()) { ?>, Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries
<?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if($_G['memory']) { ?>, <?php echo ucwords($_G['memory']); ?> On<?php } ?>.
<?php } ?>
</span>
</p>
            <p style="font-size:11px">Powered by <a href="http://www.discuz.net" target="_blank">Discuz!</a> Templates <a href="http://www.yeei.cn" target="_blank">yeei!</a>
&copy; 2001-2011 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a></p>
</div><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
<?php } ?>
</script>
</div>

<?php if($upgradecredit !== false) { ?>
<div id="g_upmine_menu" class="tip tip_3" style="display:none;">
<div class="tip_c">
积分 <?php echo $_G['member']['credits'];?>, 距离下一级还需 <?php echo $upgradecredit;?> 积分
</div>
<div class="tip_horn"></div>
</div>
<?php } } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if((CURMODULE == 'topic' || $_G['group']['allowdiy']) && (empty($do) || $do != 'index') && !empty($_G['style']['tplfile'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_G['gp_do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } ?><?php userappprompt();?><span id="scrolltop" onclick="window.scrollTo('0','0')">回顶部</span>
<script type="text/javascript">_attachEvent(window, 'scroll', function(){showTopLink();});</script><?php output();?></body>
</html>
