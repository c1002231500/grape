<?php /* Smarty version 2.6.26, created on 2011-08-25 22:55:06
         compiled from list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>一覧--shanghaitimes</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['public']; ?>
Public/css/style.css"/>
<style type="text/css">
h3 a,font{
    color: black;
}
#left h2,#left h4 {
    font-size: 18px;
    font-weight: bold;
    line-height: 1;

    padding-top: 5px;
    border-bottom: 0 none;
    margin-bottom: 5px;
    padding-bottom: 0;
}
#left h2 a{
    color: #4090B8;
}
#left h4{
    color: #999999;
    font-size: 12px;
    font-weight: normal;
    padding-left: 8px;
}
#left h5{
    font-weight: normal;
    font-size: 14px;
}
#left #details{
    width: 640px;
    color: #ffffff;
    height: 25px;
    padding-left: 20px;
    margin-top: 6px;
    font-size: 14px;
    padding-top: 5px;
    background: url(<?php echo $this->_tpl_vars['public']; ?>
/images/bg_heading_report_gradation.gif) repeat-x;
}

#left #text{
    font-family: "Hiragino Kaku Gothic Pro","ヒラギノ角ゴ Pro W3","メイリオ","ＭＳ Ｐゴシック",sans-serif;
    width: 640px;
    padding: 5px 8px;
    font-size: 12px;
    color: #202020;
    border-bottom: 1px #ebebeb solid;
    line-height: 1.5;
}
.more{
    width: 640px; text-align: right;padding-right: 10px;
}
.more a{
    color:#999999;
}
.mtop{
    padding-top: 15px;
}
-->
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
        	<!--左侧-->
        	<div id="left">
            	<!--第一个内容-->
            	<div class="w100 marginbottom">
                    <div class="w100 leftCenterImg">
                         
                    	<div class="context">
                            <font style="font-size: 11px;">記事一覧&nbsp;＞&nbsp;<?php echo $this->_tpl_vars['name']; ?>
</font>
                             <div id="details" style="border:0px;">
                               <?php echo $this->_tpl_vars['name']; ?>
&nbsp;一覧
                            </div>

                            <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                            <?php if ($this->_tpl_vars['item']['n_title'] != ''): ?>
                            <div onmousemove='this.style.backgroundColor="#E2E9ED"' onmouseout='this.style.backgroundColor="#ffffff"'>
                            <div class="mtop">
                                <img src="<?php echo $this->_tpl_vars['public']; ?>
/images/mark_heading_report.gif" style="float: left;margin: 5px" alt="shanghaitimes">
                                <h2>
                                  <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['item']['n_id']; ?>
&_c=<?php echo $this->_tpl_vars['name']; ?>
"> <?php echo $this->_tpl_vars['item']['n_title']; ?>
</a>
                                </h2>
                                <h4>
                               <?php echo $this->_tpl_vars['item']['n_starttime']; ?>

                                </h4>
                            </div>


                            <div id="text">
                                <?php if ($this->_tpl_vars['level'] == 1 || $this->_tpl_vars['level'] == 2): ?>
                                      <?php echo $this->_tpl_vars['item']['n_detail']; ?>

                                <?php endif; ?>
                              <div class="more"><a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['item']['n_id']; ?>
&_c=<?php echo $this->_tpl_vars['name']; ?>
"> more>></a></div>
                            </div>
                            <div style="clear: both"></div>
                            </div>
                            <?php else: ?>
                           <div style="margin-top: 20px;color: red;margin-left: 200px;"> このカテゴリは現在公開しておりません。このカテゴリまた分野に興味のある方は、ぜひシャンハイタイムズの窓口でお問い合わせください</div>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--右侧-->
            <div id="right">
                <br/>
                   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <div style="clear:both;"></div>
            </div>
            <div style="clear: both;"></div>
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
<script src="<?php echo $this->_tpl_vars['public']; ?>
js/right.js">
</script>
</html>