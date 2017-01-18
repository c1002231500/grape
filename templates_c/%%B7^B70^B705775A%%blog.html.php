<?php /* Smarty version 2.6.26, created on 2012-11-22 09:55:54
         compiled from grape/blog.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'substr', 'grape/blog.html', 33, false),)), $this); ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "grape/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <link type="text/css" rel="stylesheet" href="templates/grape/css/blog.css"> 
    
	<div class="top">
        	<div class="sp1"> YOYO' S BLOG</div>
            <div class="sp2"> YOYO' S BLOG</div>
    </div>
    
    <div class="left">
        	<img src="templates/grape/images/b_left.jpg" width="158" height="192" />
    </div>
	
	<div class="right">
    
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
    
        <div class="blog">
        	
            <div class="b1">
            	<div class="img"><img src="templates/grape/images/y11.jpg" /><img src="templates/grape/images/d27.jpg" /></div>
            	<div class="tit">
                	<p align=left style="margin-top:12px;"><a href="#"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['x_title']; ?>
</a></p>
                    <p align=left> 标签：<span><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['x_keyword']; ?>
</span></p>
                </div>
                
            </div>
            
            <div class="b2">
            	<img src="/templates/grape/images/blogwine.jpg" width="722px" height="250px;"  />
                <div class="imabg"></div>
            </div>
            <div class="b3">
 				<?php echo substring(array('str' => $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['x_content'],'end' => 200), $this);?>

        		<div align="right" style=" font-size:16px; background:url(/templates/grape/images/sanjiao.jpg) right center no-repeat; " > <a href="#">阅读全文</a></div>
            	<br /><div class="line"></div>
            </div>
        
        </div>	
		
        <?php endfor; endif; ?>
			<div class="blog">
        	
            <div class="b1">
            	<div class="img"><img src="templates/grape/images/y11.jpg" /><img src="templates/grape/images/d27.jpg" /></div>
            	<div class="tit">
                	<p align=left style="margin-top:12px;"><a href="#">品位红酒，浪漫之约！</a></p>
                    <p align=left> 标签：<span>红酒</span><span>热爱生活</span><span>品位</span><span>享受生活</span><span>高脚杯</span></p>
                </div>
                
            </div>
            
            <div class="b2">
            	<img src="/templates/grape/images/blogwine.jpg" width="722px" height="250px;"  />
                <div class="imabg"></div>
            </div>
            <div class="b3">
 				<p align="left">喜欢红酒，喜欢摇曳在高脚杯里的浪漫情怀，红酒与女人一样，都需要你慢慢品味，温柔的相待，细心的呵护。有品味的红酒越久越有感觉.透亮的高脚杯里，轻轻的晃着，心都醉了...</p>
	<br /><br />
				<p align="left">优版的姐妹们一直是一群热爱生活，热爱学习的朋友们，恰逢机会邀请到一位穿梭于法国波尔多地区酒庄和南京喜欢红酒，喜欢摇曳在高脚杯里的浪漫情怀，红酒与女人一样，都需要你慢慢品味，温柔的相待，细心的呵护。有品味的红酒越久越有感觉.透亮的高脚杯里，轻轻的晃着，心都醉了...</p>
        		<p align="right" style=" font-size:16px; background:url(/templates/grape/images/sanjiao.jpg) right center no-repeat; " > <a href="#">阅读全文</a></p>
            	<br /><div class="line"></div>
            </div>
        
        </div>	
			
    </div>
	
	      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "grape/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>    	
</div>
</center>
</body>
</html>
	