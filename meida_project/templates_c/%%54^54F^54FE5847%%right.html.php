<?php /* Smarty version 2.6.26, created on 2011-08-25 15:10:39
         compiled from right.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'substr', 'right.html', 60, false),)), $this); ?>
 <!--虚线-->
                <div class="w100" id="rightrow">
	                <!--渐变-->
                	<div id="context">
                        <div class="title">
                           <h4 style="font-size: 14px;">調査・研究 <font style="font-size: 12px; color: #43b4d4">Research & Report</font></h4>
                    </div>
                          <div id="contop">
                           <ul style="width: 290px;">
                               <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['ad']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <li style="padding-left: 10px">
                                    <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['n_id']; ?>
">
                                       <?php if ($this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['n_smpicture'] != ''): ?>
                                       <img  src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['n_smpicture']; ?>
"  width="50">
                                       <?php else: ?>
                                      	 <?php if ($this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['n_bigpicture'] != ''): ?>
                                       		<img style="float: left;" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="50">
                                       	 <?php elseif ($this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['b_logo'] != ''): ?>
	                                       <img  src="include/Public/Brand/<?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['b_logo']; ?>
" style="float: left; " alt="<?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['b_ename']; ?>
" title="<?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['b_jname']; ?>
" width="50" >
	                                       <?php endif; ?>
                                       <?php endif; ?>
                                   </a>
                                    <div style="width: 180px; float: left;margin-left: 10px;font-size:14px; ">
                                     <h4><a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['n_id']; ?>
" style="color: #000000;border: 0px;"> <?php echo $this->_tpl_vars['ad'][$this->_sections['sec1']['index']]['n_title']; ?>
</a></h4>
                                     </div>
                                    <div style="clear: both;"></div>
                                </li>
                                <?php endfor; endif; ?>
                           </ul>
                        </div>
                        <br/>
                    </div>
                	<div id="context1"  style="height: 900px">
                       <div class="title">
                            <h4 style="font-size: 14px;">HOT 記事ランキング</h4>
                        </div>
                        <div style="width: 290px">
                            
                        </div>

                         <div id="contop1" style="height: 850px; background: #f9f9f9">
                           <ul style="width: 290px;">
                               <?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <li>
                                    <div style="float: left; width: 40px; text-align: center;">
                                         <img src="<?php echo $this->_tpl_vars['public']; ?>
images/0<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['0']; ?>
.gif">
                                     </div>
                                    <a href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['n_id']; ?>
">
                                       <?php if ($this->_tpl_vars['count'][$this->_sections['sec1']['index']]['n_smpicture'] != ''): ?>
                                       <img  src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['n_smpicture']; ?>
" width="50">
                                       <?php else: ?>
	                                       	<?php if ($this->_tpl_vars['count'][$this->_sections['sec1']['index']]['n_bigpicture'] != ''): ?>
	                                       <img style="float: left;" src="<?php echo $this->_tpl_vars['ipath']; ?>
<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['n_bigpicture']; ?>
" alt="<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" title="<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['n_pictitle']; ?>
" width="50">
	                                       <?php elseif ($this->_tpl_vars['count'][$this->_sections['sec1']['index']]['b_logo'] != ''): ?>
	                                       <img  src="include/Public/Brand/<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['b_logo']; ?>
" style="float: left; " alt="<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['b_ename']; ?>
" title="<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['b_jname']; ?>
" width="50" >
	                                       <?php endif; ?>
                                       <?php endif; ?>
                                   </a>
                                    <div style="width: 180px; float: left;margin-left: 10px; font-size: 14px;">
                                     <h4><a style="color: #000000;border: 0px;" href="/index.php?action=content&_p=<?php echo $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['n_id']; ?>
"><?php echo substring(array('str' => $this->_tpl_vars['count'][$this->_sections['sec1']['index']]['n_title'],'end' => 20), $this);?>
</a></h4>
                                     </div>
                                    <div style="clear: both;"></div>
                                </li>
                                <?php endfor; endif; ?>
                           </ul>
                        </div>
                    </div>
                </div>