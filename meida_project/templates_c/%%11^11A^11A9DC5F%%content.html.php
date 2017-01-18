<?php /* Smarty version 2.6.26, created on 2011-08-25 15:10:38
         compiled from content.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>記事詳細----shanghaitimes</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['public']; ?>
Public/css/style.css"/>
<style rel="stylesheet" type="text/css" >
#svip a{
	 background: url(<?php echo $this->_tpl_vars['public']; ?>
images/companyon.jpg)  no-repeat;
	padding:21px 192px;
}
#svip  a:hover{
	 background: url(<?php echo $this->_tpl_vars['public']; ?>
images/companyoff.jpg)  no-repeat;
	padding:21px 192px;
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
                    	<div class="context" style="border: 1px #ebebeb solid;padding-bottom: 20px;">
                            <div style="width: 660px; text-align: center;padding-top: 10px;">
                                  <div style="width: 600px; text-align: left;padding:10px 0px 10px 40px;">
                                      <font style="font-size: 11px;">サービス&nbsp;＞<?php if ($this->_tpl_vars['title'] != ''): ?>&nbsp;<?php echo $this->_tpl_vars['title']; ?>
&nbsp;＞<?php endif; ?>&nbsp; <?php echo $this->_tpl_vars['text'][0]['n_title']; ?>
</font></div>
                                 <div style="margin: 0 auto; width: 600px; border-bottom: 1px #ebebeb dotted"></div>
                                <br/>
                                <h1 style="padding: 0px 20px; line-height: 25px;">
                                    <?php echo $this->_tpl_vars['text'][0]['n_title']; ?>

                                </h1>
                                <div style="margin: 0 auto; width: 600px; border-bottom: 1px #ebebeb solid"></div>
                            </div>

                            <h5><?php echo $this->_tpl_vars['text'][0]['n_starttime']; ?>
</h5>
						<?php if ($this->_tpl_vars['text'][0]['n_remake'] != 2): ?>
	  							<?php if ($this->_tpl_vars['level'] == 1 || $this->_tpl_vars['level'] == 2): ?>
		                            <div id="details" style="height:110px">
		                                <?php if ($this->_tpl_vars['text'][0]['n_bigpicture'] != ''): ?>
		                                    <img style="float: left;" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['text'][0]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['list'][0]['n_pictitle']; ?>
" width="100">
		                                <?php else: ?>
		                                	<?php if ($this->_tpl_vars['text'][0]['n_smpicture'] != ''): ?>
		                                    <img style="float: left;width:100px" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['text'][0]['n_smpicture']; ?>
">
		                                    <?php else: ?>
		                                       <img style="float: left;width:100px"  src="include/Public/Brand/<?php echo $this->_tpl_vars['text'][0]['b_logo']; ?>
" style="float: left; " alt="<?php echo $this->_tpl_vars['text'][0]['b_ename']; ?>
" title="<?php echo $this->_tpl_vars['text'][0]['b_jname']; ?>
" >
		                                    <?php endif; ?>
		                                <?php endif; ?>
		                                <div style="width: 480px;float:left;font-size:12px">
		                                <?php echo $this->_tpl_vars['text'][0]['n_detail']; ?>

		                                </div>
		                              </div>
		                              <br/>
		                                <?php if ($this->_tpl_vars['level'] == 2): ?>
		                                <div id="text">
		                                    <?php echo $this->_tpl_vars['text'][0]['n_context']; ?>

		                                </div>
		                                <?php endif; ?>
		                            <?php endif; ?>
							<?php else: ?>
								<div id="details" style="height:110px">
	                                <?php if ($this->_tpl_vars['text'][0]['n_bigpicture'] != ''): ?>
	                                    <img style="float: left;" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['text'][0]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['list'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['list'][0]['n_pictitle']; ?>
" width="100">
	                                <?php else: ?>
	                                   	<?php if ($this->_tpl_vars['text'][0]['n_smpicture'] != ''): ?>
		                                    <img style="float: left;width:100px" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['text'][0]['n_smpicture']; ?>
">
		                                    <?php else: ?>
		                                     <img style="float: left;width:100px"  src="include/Public/Brand/<?php echo $this->_tpl_vars['text'][0]['b_logo']; ?>
" style="float: left; " alt="<?php echo $this->_tpl_vars['text'][0]['b_ename']; ?>
" title="<?php echo $this->_tpl_vars['text'][0]['b_jname']; ?>
" >
		                                    <?php endif; ?>
	                                <?php endif; ?>
	                                <div style="width: 480px;float:left;font-size:12px">
	                                <?php echo $this->_tpl_vars['text'][0]['n_detail']; ?>

	                                </div>
	                              </div>
	                              <br/>
	                                <div id="text">
	                                    <?php echo $this->_tpl_vars['text'][0]['n_context']; ?>

	                                </div>
							<?php endif; ?>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                             <?php if ($this->_tpl_vars['level'] != 2): ?>
                            <div id="svip" style="wdith:100%;text-align: center;">
                            <a style="padding:21px 192px;"   href="http://www.shanghaitimes.net/index.php?action=page&return=vip"></a>  
                            </div>
                            <?php endif; ?>
                            <br/>
                            <br/>
                            <!--<div style="color: #8a2be2;margin-left: 20px;margin-top: 20px;"><font color="black">KEYWORD</font>: <?php echo $this->_tpl_vars['text'][0]['n_keyword']; ?>
</div>-->
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