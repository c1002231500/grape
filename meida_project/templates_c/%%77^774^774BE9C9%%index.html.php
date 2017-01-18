<?php /* Smarty version 2.6.26, created on 2011-08-25 18:34:03
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'substr', 'index.html', 51, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>トップページ</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['public']; ?>
Public/css/style.css"/>
    <style type="text/css">
h3 a,font{
    color: black;
}
-->
   #qiye img:hover{
    background: url(<?php echo $this->_tpl_vars['public']; ?>
images/head/qiyebg.jpg) no-repeat;
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
        	<!--左侧-->
        	<div id="left">
            	<!--第一个内容-->
            	<div class="w100 marginbottom">
                    <div class="w100 leftCenterImg">
                    	<div class="context">
                            <div id="lleft">
                                 <a id="qiye" href=""><img src="<?php echo $this->_tpl_vars['public']; ?>
images/head/qiye.jpg" style="margin: 0px;padding: 0px;padding-bottom:20px;border: 0px"></a>
                                <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                	 <?php if ($this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_bigpicture'] != '' || $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_smpicture'] != '' || $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['b_logo'] != ''): ?>
	                                   <div style="width:300px;padding:0px 0px 10px 0px; padding-bottom:20px; margin-bottom:20px; border-bottom: 1px #E0E0E0 solid">
	                                       <?php if ($this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_bigpicture'] != ''): ?>
	                                      <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_id']; ?>
"> <img style="float: left;" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="300"></a>
	                                       <?php else: ?>
	                                      	  <?php if ($this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_smpicture'] != ''): ?>
		                                   		    <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img  src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_smpicture']; ?>
" style="float: left; " alt="<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="50"></a>
		                                       <?php else: ?>
		                                            <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img  src="include/Public/Brand/<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['b_logo']; ?>
" style="float: left; " alt="<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['b_ename']; ?>
" title="<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['b_jname']; ?>
" width="50"></a>
		                                       <?php endif; ?>
	                                       <?php endif; ?>
	                                        <?php if ($this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_bigpicture'] != ''): ?>
	                                       <div style="width: 300px;float: left;"><h3 style="font-size: 120%;"><a style="font-size: 18px" href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_id']; ?>
"><?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_title']; ?>
</a></h3></div>
	                                       <?php else: ?>
	                                        <font style="font-size: 14px;" color="black"><h3 style="font-size: 120%;"><a style="font-size: 18px" href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_id']; ?>
"><?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_title']; ?>
</a></h3></font>
	                                       <?php endif; ?>
	                                      <div style=" margin:10px; text-align:right;"> <font color="#666666" size="2"> <?php echo substring(array('str' => $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_starttime'],'end' => 10), $this);?>
</font></div>
	                                       <font color="#333333"  style="font-size: 12px; line-height:1.5;font-weight: normal;"><?php echo substring(array('str' => $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_detail'],'end' => 80), $this);?>
</font>
	                                   </div>
                                   <?php endif; ?>
                                <?php endfor; endif; ?>

                            </div>
                            <div id="lright">
                              <img src="<?php echo $this->_tpl_vars['public']; ?>
/images/head/shop.jpg" style="margin: 0px;padding: 0px;border: 0px">
                              <div class="con" style="margin-top: 3px">
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
                               <?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_bigpicture'] != '' || $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_smpicture'] != '' || $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['b_logo'] != ''): ?>
                                   <div style="width:300px;padding: 10px 0px 10px; padding-bottom:20px; margin-bottom:20px; border-bottom: 1px #E0E0E0 solid">
                                       <?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_smpicture'] != ''): ?>
                                       <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img  src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_smpicture']; ?>
"   src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="50" style=" float:left;"></a>
                                       <?php else: ?>
                                      			 <?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_bigpicture'] != ''): ?>
		                           				    <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img style="float: left;" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="300"></a>
		                                       <?php else: ?>
		                                            <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img  src="include/Public/Brand/<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['b_logo']; ?>
" style="float: left; " alt="<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['b_ename']; ?>
" title="<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['b_jname']; ?>
" width="50" ></a>
		                                       <?php endif; ?>
                                       <?php endif; ?>
                                        <?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_smpicture'] == '' && $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['b_logo'] == ''): ?>
                                       <div style="width: 300px; float:left;"><h3 style="font-size: 120%;"><a style="font-size: 18px" href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_title']; ?>
</a></h3></div>
                                       <?php else: ?>
                                        <font style="font-size: 14px;" color="black"><h3 style="font-size: 120%;"><a style="font-size: 18px" href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_title']; ?>
</a></h3></font>
                                       <?php endif; ?>
                                     <div style="margin:10px; text-align:right;">   <font color="#666666" size="2"> <?php echo substring(array('str' => $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_starttime'],'end' => 10), $this);?>
</font></div>

                                       <font color="#333333"  style="font-size: 12px; line-height:1.5;font-weight: normal;"> <?php echo substring(array('str' => $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['n_detail'],'end' => 80), $this);?>
</font>
                                   </div>
                                   <?php endif; ?>
                                <?php endfor; endif; ?>
                                </div>
                                 <?php if ($this->_tpl_vars['dlist'] != ''): ?>
                                 <img src="<?php echo $this->_tpl_vars['public']; ?>
/images/head/ad.jpg" style="margin: 10px 0px 0px;padding: 0px;border: 0px">
                                 <div class="con" style="margin-top: 3px">
                                 <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['dlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                               <?php if ($this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_bigpicture'] != '' || $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_smpicture'] != '' || $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['b_logo'] != ''): ?>
                                   <div style="width:300px;padding: 10px 0px 10px; padding-bottom:20px; margin-bottom:20px; border-bottom: 1px #E0E0E0 solid">
                                       <?php if ($this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_smpicture'] != ''): ?>
                                       <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img  src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_smpicture']; ?>
"   src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="50" style=" float:left;"></a>
                                       <?php else: ?>
                                             <?php if ($this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_bigpicture'] != ''): ?>
		                           				 <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img style="float: left;" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="300"></a>
		                                       <?php else: ?>
		                                            <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img  src="include/Public/Brand/<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['b_logo']; ?>
" style="float: left; " alt="<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['b_ename']; ?>
" title="<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['b_jname']; ?>
" width="50" ></a>
		                                       <?php endif; ?>
                                       
                                      
                                       <?php endif; ?>
                                        <?php if ($this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_smpicture'] == '' && $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['b_logo'] == ''): ?>
                                       <div style="width: 250px; float:left;"><h3 style="font-size: 18px;"><a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_id']; ?>
" style="font-size: 18px"><?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_title']; ?>
</a></h3></div>
                                       <?php else: ?>
                                        <font style="font-size: 14px;" color="black"><h3 style="font-size: 18px;"><a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_id']; ?>
" style="font-size: 18px"><?php echo $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_title']; ?>
</a></h3></font>
                                       <?php endif; ?>
                                     <div style="margin:10px; text-align:right;">   <font color="#666666" size="2"> <?php echo substring(array('str' => $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_starttime'],'end' => 10), $this);?>
</font></div>

                                       <font color="#333333"  style="font-size: 12px; line-height:1.5;font-weight: normal;"> <?php echo substring(array('str' => $this->_tpl_vars['dlist'][$this->_sections['sec1']['index']]['n_detail'],'end' => 80), $this);?>
</font>

                                   </div>
                                   <?php endif; ?>
                                <?php endfor; endif; ?>
                                </div>
                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['clist'] != ''): ?>
                               <img src="<?php echo $this->_tpl_vars['public']; ?>
/images/head/site.jpg" style="margin: 10px 0px 0px;padding: 0px;border: 0px">
                               <div class="con" style="margin-top: 3px">
                                <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['clist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <?php if ($this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_bigpicture'] != '' || $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_smpicture'] != '' || $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['b_logo'] != ''): ?>
                                   <div style="width:300px;padding: 10px 0px 10px; padding-bottom:20px; margin-bottom:20px; border-bottom: 1px #E0E0E0 solid">
                                    <?php if ($this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_smpicture'] != ''): ?>
                                      <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_id']; ?>
"> <img  src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_smpicture']; ?>
" alt="<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="50" style=" float:left;"></a>
                                       <?php else: ?>
                                       		 <?php if ($this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_bigpicture'] != ''): ?>
                                      <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img style="float: left;" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="300"></a>
                                                  <?php else: ?>
		                                            <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_id']; ?>
"><img  src="include/Public/Brand/<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['b_logo']; ?>
" style="float: left; " alt="<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['b_ename']; ?>
" title="<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['b_jname']; ?>
" width="50" ></a>
		                                       <?php endif; ?>
                                       <?php endif; ?>
                                         <?php if ($this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_smpicture'] == '' && $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['b_logo'] == ''): ?>
                                       <div style="width: 250px; float:left; "><h3 style="font-size: 18px;"><a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_id']; ?>
" style="font-size: 18px"><?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_title']; ?>
</a></h3></div>
                                       <?php else: ?>
                                        <font style="font-size: 14px;" color="black"><h3 style="font-size: 18px;"><a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_id']; ?>
" style="font-size: 18px"><?php echo $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_title']; ?>
</a></h3></font>
                                       <?php endif; ?>
                                     <div style="margin:10px; text-align:right;">   <font color="#666666" size="2"> <?php echo substring(array('str' => $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_starttime'],'end' => 10), $this);?>
</font></div>
                                       <font color="#333333"  style="font-size: 12px; line-height:1.5;font-weight: normal;"> <?php echo substring(array('str' => $this->_tpl_vars['clist'][$this->_sections['sec1']['index']]['n_detail'],'end' => 80), $this);?>
</font>
                                   </div>
                                   <?php endif; ?>
                                <?php endfor; endif; ?>
                                </div>
                              <?php endif; ?>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--右侧-->
            <div id="right">
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