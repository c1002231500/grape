<?php /* Smarty version 2.6.26, created on 2012-11-22 06:16:12
         compiled from grape/list_wine.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'substr', 'grape/list_wine.html', 56, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "grape/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>    	
<link type="text/css" rel="stylesheet" href="templates/grape/css/list_wine.css">  

        <div class="top">
        	<div class="sp1"> 商品介绍 Products</div>
            <div class="sp2"> 首页>产品介绍>Wine CLUB系列1</div>
        </div>
		<div class="left">
        	<img src="templates/grape/images/left.jpg" width="160" height="292" />
        </div>
        
        <div class="right">
        	<div class="sou"> 
            <form action="/index.php" method="get">
              <input type="hidden" value="list_wine" id="action" name="action"/>                        
             
			 <select name="year" id="year" class="s1">
              	 <option value="">选择产地</option>
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
					<option value="<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_country']; ?>
"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_country']; ?>
</option>	
                <?php endfor; endif; ?>
              </select>
			  
			  <select name="year" id="year" class="s1">
              	<option value=""> 选择年代</option>	
				<script type="text/javascript">
					var i=1980
					for (i=1980;i<=2012;i++)
					{
					document.write("<option value=" + i +">" + i + "</option");
					document.write("<br />");
					}
				</script>
              </select>
			
			<select name="year" id="year" class="s1">
              	<option value=""> 选择色种</option>	
				<option value="1">红</option>
				<option value="2">白</option>
              </select>

			
            <input type="submit" class="s2"  value=""/>            
            </form>	
            </div>
            
			<div class="tab">
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
            	<div class="wine">
								<?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_pic'] != ''): ?><img src="include/Public/Wine/<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_pic']; ?>
" width="165" height="154" style="margin-bottom:10px;" />
                                <?php elseif ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_pic'] == ''): ?><img src="include/Public/Wine/none.jpg" width="165" height="154" style="margin-bottom:10px;" />
                                <?php endif; ?>                 
					<div class="desc">
                    	<a href="/index.php?wid=<?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_id']; ?>
&action=wine_detial"><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_chname']; ?>
</a><br>
                        <span><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_price']; ?>
</span>
                        <p><?php echo $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_country']; ?>
<img src="templates/grape/images/flag.jpg" width="16" height="11" /> 年代<?php echo substring(array('str' => $this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_year'],'end' => 4), $this);?>
 
						
						<?php if ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_color'] == '1'): ?><img src="templates/grape/images/red1.jpg" width="15" height="15" />
                        <?php elseif ($this->_tpl_vars['flist'][$this->_sections['sec1']['index']]['w_color'] == '2'): ?><img src="templates/grape/images/white.jpg" width="15" height="15" />
                        <?php endif; ?>
						
					</div>
                </div>
                <?php endfor; endif; ?>
			
                <div class="wine">
                	<img src="templates/grape/images/tabwine.jpg" width="165" height="154" style="margin-bottom:10px;"/>
                    <div class="desc">
                    	<a href="#">拉昂城堡干红葡萄酒</a><br>
                        <span>￥59</span>
                        <p>产地：<img src="templates/grape/images/flag.jpg" width="16" height="11" /> 年代：1989　<img src="templates/grape/images/red1.jpg" width="15" height="15" /></p>
                    </div>
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
