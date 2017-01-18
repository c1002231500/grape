<?php /* Smarty version 2.6.26, created on 2011-08-27 00:43:27
         compiled from service.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>サービス一覧 
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['public']; ?>
Public/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['public']; ?>
Public/css/login.css"/>
<style type="text/css">
#loginreg{
    height:auto;
}

#logincenter{
	background:url("<?php echo $this->_tpl_vars['public']; ?>
images/center.jpg") repeat-y;
	width:900px;
padding:20px 30px;
}
#logincenter h1{
	font-size:20px;
	font-weight:bold;
}
#logincenter #content1{
	padding:15px 40px 40px 40px;
	width:820px;
}
</style>
</head>

<body>
<div id="con">
    <div id="content" style="background: #d7d7d7">

        <div style="width: 1038px;margin:0 auto; background: url(<?php echo $this->_tpl_vars['public']; ?>
images/bs.jpg) repeat-y">
    	<div id="center"  style="background: #ffffff">
            <div id="head" style="width:1004px; height: 250px;padding-left: 4px;">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        	<div id="loginreg">
            <img src="<?php echo $this->_tpl_vars['public']; ?>
images/top.jpg"/>
                <div id="logincenter">
                	<h1>
                    サービス一覧
                    </h1>
                    <br/>
                    <div id="content1">
                    	１、中国におけるマーケティング関連記事、レポートの配信<br/>
						２、中国メディアへの広告出稿、リリース代行<br />
                        ３、動画レポートの配信
                    </div>
                </div>
                <img src="<?php echo $this->_tpl_vars['public']; ?>
images/bottom.jpg"/>    
 			 </div>
            <div style="clear: both;"></div>
            <br/>
        </div>
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div style="clear: both;"></div>
      </div>
    </div>
</div>
</body>
</html>