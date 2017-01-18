<?php /* Smarty version 2.6.26, created on 2012-11-22 05:51:14
         compiled from grape/wine_detial.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'substr', 'grape/wine_detial.html', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "grape/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    	
    <link type="text/css" rel="stylesheet" href="templates/grape/css/wine_detial.css"> 
   
    <div class="top">
        	<div class="sp1"> 商品介绍 Products</div>
            <div class="sp2"> 首页>产品介绍>Wine CLUB系列1</div>
    </div>
    
    <div class="left">
        	<img src="templates/grape/images/left.jpg" width="160" height="292" />
    </div>
    <div class="right">
    	<div class="name">
      	 <p><?php echo $this->_tpl_vars['wine'][0]['w_chname']; ?>
 <span><?php echo $this->_tpl_vars['wine'][0]['w_enname']; ?>
</span></p>
        </div>
        
        <div class="detial">
			<div style="float:left; margin-top:30px; margin-left:20px;">
				<img src="templates/grape/images/winedetial.jpg" width="263" height="391" />
			</div>
            <div class="descript">
            	<ul>
                	<li>种类:<span> <?php echo $this->_tpl_vars['wine'][0]['w_genteral']; ?>
</span>　<?php if ($this->_tpl_vars['wine'][0]['w_color'] == '1'): ?><img src="templates/grape/images/red1.jpg" width="15" height="15" />
                        <?php elseif ($this->_tpl_vars['wine'][0]['w_color']['w_color'] == '2'): ?><img src="templates/grape/images/white.jpg" width="15" height="15" />
                        <?php endif; ?>
					</li>
                    <li>年份:<span>　<?php echo substring(array('str' => $this->_tpl_vars['wine'][0]['w_year'],'end' => 4), $this);?>
</span></li>
                    <li>容量:<span>　<?php echo $this->_tpl_vars['wine'][0]['w_descript']; ?>
</span></li>
                    <li>出产地:<span>　<?php echo $this->_tpl_vars['wine'][0]['w_country']; ?>
</span>　<img src="templates/grape/images/flag.jpg" width="15" height="15" /></li>
                    <li>单/套选择:<span><?php if ($this->_tpl_vars['wine'][0]['w_single'] == 1): ?>单品
						<?php elseif ($this->_tpl_vars['wine'][0]['w_single'] == 2): ?>  套装<?php endif; ?>
						</span></li>
                    <li>库存:<span> <?php echo $this->_tpl_vars['wine'][0]['w_reserve']; ?>
</span></li>
                    <li>参考价格:<span>　<?php echo $this->_tpl_vars['wine'][0]['w_price']; ?>
</span></li>

                 </ul>
                 <?php echo $this->_tpl_vars['wine'][0]['w_content']; ?>

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