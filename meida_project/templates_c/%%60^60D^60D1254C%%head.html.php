<?php /* Smarty version 2.6.26, created on 2011-08-25 15:10:38
         compiled from head.html */ ?>
  <script src="<?php echo $this->_tpl_vars['public']; ?>
js/jquery.js" type="text/javascript" language="javascript"></script>


<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['public']; ?>
Public/css/css.css"/>
<script language="javascript">
	function qiehuan(num){
		for(var id = 0;id<=9;id++)
		{
			if(id==num)
			{
				document.getElementById("qh_con"+id).style.display="block";
				document.getElementById("mynav"+id).className="nav_on";
			}
			else
			{
				document.getElementById("qh_con"+id).style.display="none";
				document.getElementById("mynav"+id).className="";
			}
		}
	}
    <!--
        //屏蔽js错误
        function ResumeError() {
        return true;
        }
        window.onerror = ResumeError;
        // -->

//    $.(document).ready(
//                function(){
//                    alert("asdfads");
//                  //  $p=$.query.get("p");
//                  //       alert($p);
//                }
//            );
</script>
          <style>
              #login{
                  padding-top:2px;
                  padding-right: 10px;
              }
              #login span{
                  padding: 10px 10px 5px;;
                  color: #000000;
                  font-size: 12px;
              }
             #menu_con a:hover{
                color: orange;
            }
            #menu_con a{
                color: #000000;
            }
          </style>
        <div style=" text-align:right;height: 28px;">
            <div id="login">
                <?php if ($this->_tpl_vars['username'] == ''): ?>
                <span><a href="/index.php?action=login" style="color: #000000;">ログイン</a></span>|<span><a href="/index.php?action=login"  style="color: #000000;">新規登録</a></span>
                <?php else: ?>
                <span><a href="#" style="color: #000000;">Welcome <?php echo $this->_tpl_vars['username']; ?>
</a></span>|<span><a href="/index.php?action=exit"  style="color: #000000;">ログアウト</a></span>
                <?php endif; ?>
            </div>
        </div>
 <div id="logo" style="height: 120px; width: 980px;margin: 0 auto; border-top: 5px black solid;">
<img src="<?php echo $this->_tpl_vars['public']; ?>
/images/logo.jpg" alt="shanghaitimes" title="shanghaitimes">
 </div>
<div id=menu_out>
<div id=menu_in>
<div id=menu>
<UL id=nav>
<LI><A class=nav_on id=mynav0 onmouseover=javascript:qiehuan(0) href=""><SPAN>トップページ</SPAN></A></LI>
<?php $this->assign('i', 1); ?>
<?php $this->assign('j', 1); ?>
<?php $this->assign('z', 1); ?>
<?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<LI class="menu_line"></LI><li><a href="/index.php?action=list&cid=<?php echo $this->_tpl_vars['item']['c_id']; ?>
&name=<?php echo $this->_tpl_vars['item']['c_name']; ?>
&p=mynav<?php echo $this->_tpl_vars['z']++; ?>
" onmouseover="javascript:qiehuan(<?php echo $this->_tpl_vars['i']++; ?>
)" id="mynav<?php echo $this->_tpl_vars['j']++; ?>
" class="nav_off"><span><?php echo $this->_tpl_vars['item']['c_name']; ?>
</span></a></li>
    <?php endforeach; endif; unset($_from); ?>
</UL>
<div id=menu_con>
<div id=qh_con0 style="DISPLAY: block">
<UL>
    <?php $_from = $this->_tpl_vars['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['item']):
?>
     <LI><a style="padding: 0px;" href="/index.php?action=list&keyword=<?php echo $this->_tpl_vars['k']; ?>
"><span ><?php echo $this->_tpl_vars['k']; ?>
</span></A></LI><LI class=menu_line2></LI>
    <?php endforeach; endif; unset($_from); ?>
</UL>
</div>
<?php $this->assign('z', 1); ?>
<?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<div id=qh_con<?php echo $this->_tpl_vars['z']++; ?>
 style="DISPLAY: none">
 <UL  style="width: 1000px;padding:0px;margin:0px">
   <?php $_from = $this->_tpl_vars['type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['types']):
?>
     <?php if ($this->_tpl_vars['item']['c_id'] == $this->_tpl_vars['types']['t_classid']): ?>
          <LI><a style="padding: 0px;" href="/index.php?action=list&sid=<?php echo $this->_tpl_vars['types']['t_id']; ?>
&name=<?php echo $this->_tpl_vars['types']['t_name']; ?>
"><span ><?php echo $this->_tpl_vars['types']['t_name']; ?>
</span></A></LI><LI class=menu_line2></LI>
     <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>
</UL></div>
<?php endforeach; endif; unset($_from); ?>
<!--<div id=qh_con2 style="DISPLAY: none"><UL>-->
  <!--<LI><a href="#"><span>栏目名称7</span></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称8</SPAN></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称9</SPAN></A></LI>-->
<!--</UL></div> -->
<!--<div id=qh_con3 style="DISPLAY: none"><UL>-->
  <!--<LI><a href="#"><span>栏目名称10</span></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称11</SPAN></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称12</SPAN></A></LI>-->
<!--</UL></div> -->
<!--<div id=qh_con4 style="DISPLAY: none"><UL>-->
  <!--<LI><a href="#"><span>栏目名称13</span></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称14</SPAN></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称15</SPAN></A></LI>-->
<!--</UL></div>-->
<!--<div id=qh_con5 style="DISPLAY: none"><UL>-->
  <!--<LI><a href="#"><span>栏目名称16</span></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称17</SPAN></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称18</SPAN></A></LI>-->
<!--</UL></div>-->
<!--<div id=qh_con6 style="DISPLAY: none"><UL>-->
  <!--<LI><a href="#"><span>栏目名称19</span></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称20</SPAN></A></LI><LI class=menu_line2></LI>-->
  <!--<LI><A href="#"><SPAN>栏目名称21</SPAN></A></LI>-->
<!--</UL></div>-->

</div></div></div></div>