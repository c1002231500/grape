<?php /* Smarty version 2.6.26, created on 2012-11-13 01:59:15
         compiled from admin/index.html */ ?>
﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="Comsenz Inc." name="Copyright" />
 <meta http-equiv="X-UA-Compatible" content="IE=8" /> 
        <title>后台管理</title>

        <link media="all" type="text/css"
              href="/templates/Content/admincp/admincp.css" rel="stylesheet">
        <script src="/templates/Content/admincp/common.js" type="text/javascript"></script>
    </head>
    <body style="margin: 0px" scroll="no"
          onLoad="toggleMenu('plugin', '/admin.php?action=Brand_List');">
        <table cellpadding="0" cellspacing="0" width="100%" height="100%">
            <tr>
                <td colspan="2" height="90">
                    <div class="mainhd">
                        <div class="logo">新闻后台管理</div>
                        <div class="uinfo">
                            <p>您好, <em>admin</em> [ <a href="/index.php?action=exit" target="_top">退出</a>
                                ]</p>
                            <p class="btnlink"></p>
                        </div>
                        <div class="navbg"></div>
                        <div class="nav">
                            <ul id="topmenu">
                                <!--	<li><em><a href="javascript:;" id="header_index"
                                                hidefocus="true" onClick="toggleMenu('index', 'home.html');">首页</a></em></li>-->
                                <?php 
                                if($_SESSION ['id']==1){
                                 ?>
                                <li><em><a href="javascript:;" id="header_global"
hidefocus="true" onClick="toggleMenu('global', '/admin.php?action=newslist');">新闻管理</a></em></li>
                                <li><em><a href="javascript:;" id="header_tool"
                                           hidefocus="true" onClick="toggleMenu('tool', '/admin.php?action=guestlist');">用户管理</a></em></li>
                                <?php 
                                }
                                 ?>
                                <li><em><a href="javascript:;" id="header_forum" hidefocus="true" onClick="toggleMenu('forum', '/admin.php?action=classlist');">类别管理</a></em></li>
                                <li><em><a href="javascript:;" id="header_countryin"  hidefocus="true" onClick="toggleMenu('countryin', '/admin.php?action=Country_List');">国家管理</a></em></li>
                                <li><em><a href="javascript:;" id="header_plugin"  hidefocus="true" onClick="toggleMenu('plugin', '/admin.php?action=Brand_List');">品牌管理</a></em></li>
								<li><em><a href="javascript:;" id="header_pugin"  hidefocus="true" onClick="toggleMenu('pugin', '/admin.php?action=People_List');">人物管理</a></em></li>
								<li><em><a href="javascript:;" id="header_pugin1"  hidefocus="true" onClick="toggleMenu('pugin1', '/admin.php?action=Guyou_List');">固有名词管理</a></em></li>
								<li><em><a href="javascript:;" id="header_indexjs"  hidefocus="true" onClick="toggleMenu('indexjs', '/admin.php?action=Js_List');">首页JS控制面板</a></em></li>
								<li><em><a href="javascript:;" id="header_human"  hidefocus="true" onClick="toggleMenu('human', '/admin.php?action=Human_List');"> 明星圈</a></em></li>
                                <!--<li><em><a href="javascript:;" id="header_user" hidefocus="true" onClick="toggleMenu('user', 'members');">权限管理</a></em></li>
                                <li><em><a href="javascript:;" id="header_topic" hidefocus="true" onClick="toggleMenu('topic', 'Doc_index');">文章管理</a></em></li>
                                            <li><em><a href="javascript:;" id="header_extended"
                                                    hidefocus="true" onClick="toggleMenu('extended', 'Class_Country');">类别管理</a></em></li>
                    
                                            <li><em><a href="javascript:;" id="header_adv"
                                                    hidefocus="true" onClick="toggleMenu('adv', 'Message_index');">网站公告</a></em></li>
                                -->
                                <!-- <li><em><a href="javascript:;" id="header_tool"
                                        hidefocus="true" onClick="toggleMenu('user', 'Document_index');">文章管理</a></em></li> -->
                                <!--  <li><em><a id="header_uc" hidefocus="true" href="http://localhost/comsenz/ucenter/admin.php?m=frame&a=main&iframe=1" onClick="uc_login=1;toggleMenu('uc', '');" target="main">UCenter</a></em></li> -->
                            </ul>
                            <div class="currentloca">
                                <p id="admincpnav"></p>
                            </div>
                            <div class="navbd"></div>
                            <div class="sitemapbtn">
                                <div style="float: left; margin: -5px 10px 0 0"></div>
                                <span id="add2custom"></span></div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" width="160" class="menutd">
                    <div id="leftmenu" class="menu">
                        <ul id="menu_global" style="display: none">
                            <li><a href="/admin.php?action=newslist" hidefocus="true" target="main">新闻列表</a></li>
                            <li><a href="/admin.php?action=page&page=Add_News" hidefocus="true" target="main">新闻添加</a></li>
                        </ul>
                        <ul id="menu_forum" style="display: none">
                            <li><a href="/admin.php?action=classlist" hidefocus="true" target="main">类别列表</a></li>

                        </ul>
                        <ul id="menu_user" style="display: none">
                            <li><a href="admincp.php?action=members&operation=add"
                                   hidefocus="true" target="main">添加用户</a></li>
                        </ul>
                        <!-- z<ul id="menu_topic" style="display: none">
                                <li><a href="admincp.php?action=moderate&operation=threads"
                                        hidefocus="true" target="main">审核帖子</a></li>
                        </ul>-->

                        <ul id="menu_extended" style="display: none">
                            <!--<li><a href="Class_Info" hidefocus="true" target="main">菜系分类</a></li>-->
                            <li><a href="Class_Stock" hidefocus="true" target="main">原料分类</a></li>
                            <li><a href="Class_Recipe" hidefocus="true" target="main">烹饪法分类</a></li>
                            <li><a href="Class_Commodity" hidefocus="true" target="main">商品分类</a></li>
                            <li><a href="Class_Document" hidefocus="true" target="main">文章分类</a></li>
                            <li><a href="Class_layout" hidefocus="true" target="main">企划分类</a></li>
                            <!--<li><a href="Class_Message" hidefocus="true" target="main">网站公告分类</a></li>-->
                        </ul>
						 <ul id="menu_countryin" style="display: none">
                            <!--   <li><a href="/admin.php?action=page&page=Add_Document" hidefocus="true" target="main">系统文章列表</a></li>
                                           <li><a href="Video_Menu_index" hidefocus="true" target="main">添加系统文章</a></li>
                               <div style="margin: 0 auto;width: 80%; border-bottom: 1px #999999 solid"></div>
                               </li>-->

                            <li><a href="/admin.php?action=Country_List" hidefocus="true" target="main">国家列表</a></li>
                            <li><a href="/admin.php?action=page&page=Add_Country" hidefocus="true" target="main">添加国家</a></li>
                            </li>

                            <!-- <li><a href="Video_Goods_Add" hidefocus="true" target="main">添加商品视频</a></li> -->
                        </ul>
                        
                        <ul id="menu_plugin" style="display: none">
                            <!--   <li><a href="/admin.php?action=page&page=Add_Document" hidefocus="true" target="main">系统文章列表</a></li>
                                           <li><a href="Video_Menu_index" hidefocus="true" target="main">添加系统文章</a></li>
                               <div style="margin: 0 auto;width: 80%; border-bottom: 1px #999999 solid"></div>
                               </li>-->

                            <li><a href="/admin.php?action=Brand_List" hidefocus="true" target="main">品牌列表</a></li>
                            <li><a href="/admin.php?action=page&page=Add_Brand" hidefocus="true" target="main">添加品牌</a></li>
                            </li>

                            <!-- <li><a href="Video_Goods_Add" hidefocus="true" target="main">添加商品视频</a></li> -->
                        </ul>
                       
                       <ul id="menu_pugin" style="display: none">
                            <!--   <li><a href="/admin.php?action=page&page=Add_Document" hidefocus="true" target="main">系统文章列表</a></li>
                                           <li><a href="Video_Menu_index" hidefocus="true" target="main">添加系统文章</a></li>
                               <div style="margin: 0 auto;width: 80%; border-bottom: 1px #999999 solid"></div>
                               </li>-->

                            <li><a href="/admin.php?action=People_List" hidefocus="true" target="main">人物列表</a></li>
                            <li><a href="/admin.php?action=page&page=Add_People" hidefocus="true" target="main">添加人物</a></li>
                            </li>

                            <!-- <li><a href="Video_Goods_Add" hidefocus="true" target="main">添加商品视频</a></li> -->
                        </ul>
                        
                        <ul id="menu_pugin1" style="display: none">
                            <!--   <li><a href="/admin.php?action=page&page=Add_Document" hidefocus="true" target="main">系统文章列表</a></li>
                                           <li><a href="Video_Menu_index" hidefocus="true" target="main">添加系统文章</a></li>
                               <div style="margin: 0 auto;width: 80%; border-bottom: 1px #999999 solid"></div>
                               </li>-->

                            <li><a href="/admin.php?action=Guyou_List" hidefocus="true" target="main">固有名词列表</a></li>
                            <li><a href="/admin.php?action=page&page=Add_Guyou" hidefocus="true" target="main">添加固有名词</a></li>
                            </li>

                            <!-- <li><a href="Video_Goods_Add" hidefocus="true" target="main">添加商品视频</a></li> -->
                        </ul>
                        
                        <ul id="menu_indexjs" style="display: none">
                            <!--   <li><a href="/admin.php?action=page&page=Add_Document" hidefocus="true" target="main">系统文章列表</a></li>
                                           <li><a href="Video_Menu_index" hidefocus="true" target="main">添加系统文章</a></li>
                               <div style="margin: 0 auto;width: 80%; border-bottom: 1px #999999 solid"></div>
                               </li>-->

                            <li><a href="/admin.php?action=Js_List" hidefocus="true" target="main">首页JS控制面板</a></li>
                            <li><a href="/admin.php?action=page&page=Add_Js" hidefocus="true" target="main">添加JS新闻</a></li>
                            </li>

                            <!-- <li><a href="Video_Goods_Add" hidefocus="true" target="main">添加商品视频</a></li> -->
                        </ul>
                        
                        <ul id="menu_human" style="display: none">
                            <!--   <li><a href="/admin.php?action=page&page=Add_Document" hidefocus="true" target="main">系统文章列表</a></li>
                                           <li><a href="Video_Menu_index" hidefocus="true" target="main">添加系统文章</a></li>
                               <div style="margin: 0 auto;width: 80%; border-bottom: 1px #999999 solid"></div>
                               </li>-->

                            <li><a href="/admin.php?action=Human_List" hidefocus="true" target="main">明星圈列表</a></li>
                            <li><a href="/admin.php?action=page&page=Add_Human" hidefocus="true" target="main">添加人物</a></li>
                            </li>

                            <!-- <li><a href="Video_Goods_Add" hidefocus="true" target="main">添加商品视频</a></li> -->
                        </ul>
                        
                        <ul id="menu_style" style="display: none">
                            <li><a href="User_index" hidefocus="true" target="main" style="color:#F00;">管理员会员一览</a></li>
                            <li><a href="User_Add" hidefocus="true" target="main"  style="color:#F00;">添加管理员</a></li>
                            <li><a href="member" hidefocus="true" target="main">普通会员一览</a></li>
                        </ul>
                        <ul id="menu_tool" style="display: none">
                            <li><a href="/admin.php?action=guestlist" hidefocus="true" target="main">用户列表</a></li>
                        </ul>
                        <ul id="menu_adv" style="display: none">
                            <li><a href="Message_index" hidefocus="true" target="main">网站公告</a></li>
                            <li><a href="Message_Add" hidefocus="true" target="main">添加公告</a></li>
                            <li><a href="Class_Message" hidefocus="true" target="main" style="color:red">网站公告分类</a></li>
                        </ul>
                        <ul id="menu_topic" style="display: none">
                            <li><a href="Doc_index" hidefocus="true" target="main">文章一览</a></li>
                            <li><a href="Doc_Add" hidefocus="true" target="main">添加文章</a></li>
                            <li><a href="Class_Document" hidefocus="true" target="main" style="color:red">文章分类</a></li>
                            <li><a href="Class_layout" hidefocus="true" target="main" style="color:red">企划分类</a></li>
                            <li><a href="Class_time" hidefocus="true" target="main" style="color:red">首页企划图片</a></li>
                        </ul>
                    </div>
                </td>
                <td valign="top" width="100%" class="mask" id="mainframes"><iframe
                        src="/admin.php?action=newslist" id="main" name="main" width="100%" height="1000"
                        frameborder="0" scrolling="yes" style="overflow: visible; "></iframe>
                </td>
            </tr>
        </table>
        <div id="custombarpanel"></div>
        <div id="scrolllink" style="display: none"><span
                onClick="menuScroll(1)"><img
                    src="__PUBLIC__/Images/admincp/scrollu.gif" /></span> <span
                onClick="menuScroll(2)"><img
                    src="__PUBLIC__/Images/admincp/scrolld.gif" /></span></div>
        <div class="copyright">
        </div>
        <div id="cpmap_menu" class="custom" style="display: none">
            <div class="cside">
                <h3><span class="ctitle1"></span><a href="javascript:;" onClick="toggleMenu('tool', 'misc&operation=custommenu');hideMenu();" class="cadmin">管理</a></h3>
                <ul class="cslist" id="custommenu">
                </ul>
            </div>
            <div class="cmain" id="cmain"></div>
            <div class="cfixbd"></div>
        </div>
        <script type="text/JavaScript">
            var headers = new Array('global', 'style', 'forum','countryin','plugin','pugin','pugin1', 'tool', 'uc','indexjs','human');
            var admincpfilename = 'home';
            var menukey = '', custombarcurrent = 0;
            function toggleMenu(key, url) {
                menukey = key;
                for ( var k in headers) {
                    if ($('menu_' + headers[k])) {
                        $('menu_' + headers[k]).style.display = headers[k] == key ? ''
                        : 'none';
                    }
                }
                var lis = $('topmenu').getElementsByTagName('li');
                for ( var i = 0; i < lis.length; i++) {
                    if (lis[i].className == 'navon')
                        lis[i].className = '';
                }
                $('header_' + key).parentNode.parentNode.className = 'navon';

                var link = "http://localhost/admin/" + url;

                if (url) {
                    parent.mainFrame(0);
                    //parent.main.location = admincpfilename + '?action=' + url;
                    //Page redirect
                    //alert(url);
                    parent.main.location = url;
                    var hrefs = $('menu_' + key).getElementsByTagName('a');
                    for ( var j = 0; j < hrefs.length; j++) {
                        hrefs[j].className = hrefs[j].href.substr(hrefs[j].href
                        .indexOf(admincpfilename + '?action=') + 19) == url ? 'tabon'
                        : (hrefs[j].className == 'tabon' ? ''
                        : hrefs[j].className);
                    }
                }
                setMenuScroll();
                return false;
            }
            function setMenuScroll() {
                var obj = $('menu_' + menukey);
                var scrollh = document.body.offsetHeight - 160;
                obj.style.overflow = 'visible';
                obj.style.height = '';
                $('scrolllink').style.display = 'none';
                if (obj.offsetHeight + 150 > document.body.offsetHeight && scrollh > 0) {
                    obj.style.overflow = 'hidden';
                    obj.style.height = scrollh + 'px';
                    $('scrolllink').style.display = '';
                }
                custombar_resize();
            }
            function menuScroll(op, e) {
                var obj = $('menu_' + menukey);
                var scrollh = document.body.offsetHeight - 160;
                if (op == 1) {
                    obj.scrollTop = obj.scrollTop - scrollh;
                } else if (op == 2) {
                    obj.scrollTop = obj.scrollTop + scrollh;
                } else if (op == 3) {
                    if (!e)
                        e = window.event;
                    if (e.wheelDelta <= 0 || e.detail > 0) {
                        obj.scrollTop = obj.scrollTop + 20;
                    } else {
                        obj.scrollTop = obj.scrollTop - 20;
                    }
                }
            }
            function initCpMenus(menuContainerid) {
                var key = '';
                var hrefs = $(menuContainerid).getElementsByTagName('a');
                for ( var i = 0; i < hrefs.length; i++) {
                    if (menuContainerid == 'leftmenu'
                        && !key
                        && 'action=home'.indexOf(hrefs[i].href.substr(hrefs[i].href
                    .indexOf(admincpfilename + '?action=') + 12)) != -1) {
                        key = hrefs[i].parentNode.parentNode.id.substr(5);
                        hrefs[i].className = 'tabon';
                    }
                    if (!hrefs[i].getAttribute('ajaxtarget'))
                        hrefs[i].onclick = function() {
                            if (menuContainerid != 'custommenu') {
                                var lis = $(menuContainerid).getElementsByTagName('li');
                                for ( var k = 0; k < lis.length; k++) {
                                    if (lis[k].firstChild.className != 'menulink')
                                        lis[k].firstChild.className = '';
                                }
                                if (this.className == '')
                                    this.className = menuContainerid == 'leftmenu' ? 'tabon'
                                : 'bold';
                            }
                        if (menuContainerid != 'leftmenu') {
                            var hk, currentkey;
                            var leftmenus = $('leftmenu').getElementsByTagName('a');
                            for ( var j = 0; j < leftmenus.length; j++) {
                                hk = leftmenus[j].parentNode.parentNode.id
                                .substr(5);
                                if (this.href.indexOf(leftmenus[j].href) != -1) {
                                    leftmenus[j].className = 'tabon';
                                    if (hk != 'index')
                                        currentkey = hk;
                                } else {
                                    leftmenus[j].className = '';
                                }
                            }
                            if (currentkey)
                                toggleMenu(currentkey);
                            hideMenu();
                        }
                    }
                }
                return key;
            }
            var header_key = initCpMenus('leftmenu');
            toggleMenu(header_key ? header_key : 'index');
            function initCpMap() {
                var ul, hrefs, s;
                s = '<ul class="cnote"><li><img src="templates/Content/admincp/btn_map.gif" /></li><li> 按 “ ESC ” 键展开 / 关闭此菜单</li></ul><table class="cmlist" id="mapmenu"><tr>';

                for ( var k in headers) {
                    if (headers[k] != 'index' && headers[k] != 'uc') {
                        s += '<td valign="top"><ul class="cmblock"><li><h4>' + $('header_' + headers[k]).innerHTML + '</h4></li>';
                        ul = $('menu_' + headers[k]);
                        hrefs = ul.getElementsByTagName('a');
                        for ( var i = 0; i < hrefs.length; i++) {
                            s += '<li><a href="' + hrefs[i].href + '" target="'
                                + hrefs[i].target + '" k="' + headers[k] + '">'
                                + hrefs[i].innerHTML + '</a></li>';
                        }
                        s += '</ul></td>';
                    }
                }
                s += '</tr></table>';
                return s;
            }
            $('cmain').innerHTML = initCpMap();
            initCpMenus('mapmenu');
            var cmcache = false;
            function showMap() {
                showMenu( {
                    'ctrlid' : 'cpmap',
                    'evt' : 'click',
                    'duration' : 3,
                    'pos' : '00'
                });
                if (!cmcache)
                    ajaxget(admincpfilename + '?action=misc&operation=custommenu&'
                    + Math.random(), 'custommenu', '');
            }
            function resetEscAndF5(e) {
                e = e ? e : window.event;
                actualCode = e.keyCode ? e.keyCode : e.charCode;
                if (actualCode == 27) {
                    if ($('cpmap_menu').style.display == 'none') {
                        showMap();
                    } else {
                        hideMenu();
                    }
                }
                if (actualCode == 116 && parent.main) {
                    if (custombarcurrent) {
                        parent.$('main_' + custombarcurrent).contentWindow.location
                        .reload();
                    } else {
                        parent.main.location.reload();
                    }
                    if (document.all) {
                        e.keyCode = 0;
                        e.returnValue = false;
                    } else {
                        e.cancelBubble = true;
                        e.preventDefault();
                    }
                }
            }
            function uc_left_menu(uc_menu_data) {
                var leftmenu = $('menu_uc');
                leftmenu.innerHTML = '';
                var html_str = '';
                for ( var i = 0; i < uc_menu_data.length; i += 2) {
                    html_str += '<li><a href="'
                        + uc_menu_data[(i + 1)]
                        + '" hidefocus="true" onclick="uc_left_switch(this)" target="main">'
                        + uc_menu_data[i] + '</a></li>';
                }
                leftmenu.innerHTML = html_str;
                toggleMenu('uc', '');
                $('admincpnav').innerHTML = 'UCenter';
            }
            var uc_left_last = null;
            function uc_left_switch(obj) {
                if (uc_left_last) {
                    uc_left_last.className = '';
                }
                obj.className = 'tabon';
                uc_left_last = obj;
            }
            function uc_modify_sid(sid) {
                //$('header_uc').href = 'http://localhost/comsenz/ucenter/admin.php?m=frame&a=main&iframe=1&sid=' + sid;
            }

            function mainFrame(id, src) {
                var setFrame = !id ? 'main' : 'main_' + id, obj = $('mainframes')
                .getElementsByTagName('IFRAME'), exists = 0, src = !src ? ''
                : src;
                for (i = 0; i < obj.length; i++) {
                    if (obj[i].name == setFrame) {
                        exists = 1;
                    }
                    obj[i].style.display = 'none';
                }
                if (!exists) {
                    if (BROWSER.ie) {
                        frame = document.createElement('<iframe name="' + setFrame
                            + '" id="' + setFrame + '"></iframe>');
                    } else {
                        frame = document.createElement('iframe');
                        frame.name = setFrame;
                        frame.id = setFrame;
                    }
                    frame.width = '100%';
                    frame.height = '100%';
                    frame.frameBorder = 0;
                    frame.scrolling = 'yes';
                    frame.style.overflow = 'visible';
                    frame.style.display = 'none';
                    if (src) {
                        frame.src = src;
                    }
                    $('mainframes').appendChild(frame);
                }
                if (id) {
                    custombar_set(id);
                }
                $(setFrame).style.display = '';
                if (!src && custombarcurrent) {
                    $('custombar_' + custombarcurrent).className = '';
                    custombarcurrent = 0;
                }
            }

            function custombar_update(deleteid) {
                var extra = !deleteid ? '' : '&deleteid=' + deleteid;
                if (deleteid && $('main_' + deleteid)) {
                    $('mainframes').removeChild($('main_' + deleteid));
                    if (deleteid == custombarcurrent) {
                        mainFrame(0);
                    }
                }
                ajaxget(admincpfilename + '?action=misc&operation=custombar' + extra,
                'custombar', '', '', '', function() {
                    custombar_resize();
                });
            }
            function custombar_resize() {
                custombarfixw = document.body.offsetWidth - 180;
                $('custombarpanel').style.width = custombarfixw + 'px';
            }
            function custombar_scroll(op, e) {
                var obj = $('custombarpanel');
                var step = 40;
                if (op == 1) {
                    obj.scrollLeft = obj.scrollLeft - step;
                } else if (op == 2) {
                    obj.scrollLeft = obj.scrollLeft + step;
                } else if (op == 3) {
                    if (!e)
                        e = window.event;
                    if (e.wheelDelta <= 0 || e.detail > 0) {
                        obj.scrollLeft = obj.scrollLeft + step;
                    } else {
                        obj.scrollLeft = obj.scrollLeft - step;
                    }
                }
            }
            function custombar_set(id) {
                var currentobj = $('custombar_' + custombarcurrent), obj = $('custombar_' + id);
                if (currentobj == obj) {
                    obj.className = 'current';
                    return;
                }
                if (currentobj) {
                    currentobj.className = '';
                }
                obj.className = 'current';
                custombarcurrent = id;
            }

            custombar_update();
            _attachEvent(document.documentElement, 'keydown', resetEscAndF5);
            _attachEvent(window, 'resize', setMenuScroll, document);
            if (BROWSER.ie) {
                $('leftmenu').onmousewheel = function(e) {
                    menuScroll(3, e)
                };
                $('custombarpanel').onmousewheel = function(e) {
                    custombar_scroll(3, e)
                };
            } else {
                $('leftmenu').addEventListener("DOMMouseScroll", function(e) {
                    menuScroll(3, e)
                }, false);
                $('custombarpanel').addEventListener("DOMMouseScroll", function(e) {
                    custombar_scroll(3, e)
                }, false);
            }
        </script>
    </body>
</html>