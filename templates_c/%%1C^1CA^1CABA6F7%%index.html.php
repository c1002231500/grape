<?php /* Smarty version 2.6.26, created on 2012-11-21 05:26:35
         compiled from grape/index.html */ ?>
﻿<script language="javascript">
var current = 0;
var imgNum = 1;
var interval = 0;
function showContent(index){
	var oldTag = document.getElementById("list" + current.toString());
	var oldCon = document.getElementById("showCon" + current.toString());
	var newTag = document.getElementById("list" + index.toString());
	var newCon = document.getElementById("showCon" + index.toString());
	if(current != index){
		oldTag.className= " ";
		oldCon.style.display = "none";
		current = index;
		newTag.className="on";
		newCon.style.display = "block";
	}
}
function setMode(n){
	if(n != null){
		imgNum = n+1;
	}
	if(interval == 0){
		interval = setInterval("showTime()", 2000);  //时间调整
	}
}
function showTime(){
	if(imgNum > 3){
		imgNum = 0;
	}
	showContent(imgNum);
	imgNum ++;
}
setMode(); 
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "grape/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<link type="text/css" rel="stylesheet" href="templates/grape/css/index.css" />
		<div class="search">
            <form action="" method="">
            	<select name="s1" class="s1" value="选择国家" >
                	<option>选择国家</option>
                </select>
              <select name="s2" class="s1"  ><option>选择产地</option></select>
              <select name="s3" class="s1"  ><option>选择年代</option></select>
              <select name="s4" class="s1"  ><option>选择色种</option></select>
              	<input type="submit" class="s2"  value="搜索"/>
              </form>
        </div> 

        <div class="banner">
        	<div class="big-pic" id="showCon0" >
			<a ><img src="templates/grape/images/banner1.jpg" /></a>
			</div>
			
			<div class="big-pic" id="showCon1" style="display: none" >
			<a ><img  src="templates/grape/images/banner2.jpg" /></a>
			</div>
			
			<div class="big-pic" id="showCon2" style="display: none" >
			<a ><img  src="templates/grape/images/banner3.jpg" /></a>
			</div>
			
			<div class="big-pic" id="showCon3" style="display: none" >
			<a ><img  src="templates/grape/images/banner4.jpg" /></a>
			</div>
		
            <div class="small">
           	 	<div id="myscroll" class="cls_container">
 				<ul>
	 <li><a href='#'>娱乐圈</a> : 今天有中国好声音，看... 09月28日<br/></li>
	 <li><a href='#'>小明</a> : 钓鱼岛是中国的。 09月28日<br/></li>
	 <li><a href='#'>食神</a> : 工地传来一阵刺耳的电... 09月25日<br/></li>
	 <li><a href='#'>陈军</a> : 家乡带来的麻花，还是... 09月24日<br/></li>
	 <li><a href='#'>ABCD罗</a> : 订报纸后悔啊，每天塞... 09月19日<br/></li>
	 <li><a href='#'>山姆二叔</a> : 广告越来越难做了。客... 09月19日<br/></li>
     			</ul>
     			</div>
               
                
            	<ul class="small-pic">
					
					<li class="on" id="list0" onmouseover="showContent(0)">
						<a ><img  src="templates/grape/images/tu01.jpg" /></a>
					</li>
					<li  id="list1" onmouseover="showContent(1)">
						<a ><img  src="templates/grape/images/tu01.jpg" /></a>
					</li>
					<li id="list2" onmouseover="showContent(2)">
						<a ><img  src="templates/grape/images/tu01.jpg" /></a>
					</li>
					<li  id="list3" onmouseover="showContent(3)">
						<a ><img  src="templates/grape/images/tu01.jpg" /></a>
					</li>
                	
                   
                </ul>
                
				
            </div>
        </div>
     
		<div class="man">
    	<div class="left">
       		<div class="notice">
           		<img src="templates/grape/images/notice.jpg" width="293" height="22" />
                <ul>
                	<li><a href="#">湖北省十堰市房县拉出2.9亿fd</a><span>10-16</span></li>
                    <li><a href="#">湖北省十堰市sdf拉出2.9亿</a><span>10-16</span></li>
                    <li><a href="#">湖北省十堰市房县拉出2.9亿第三方</a><span>10-16</span></li>
                    <li><a href="#">湖北省adf十堰市房县拉出2.9亿</a><span>10-16</span></li>
                    <li><a href="#">湖北省十堰市房县拉fs9亿斯蒂芬</a><span>10-16</span></li>
                </ul>
            </div>

            <div class="blog">
            <img src="templates/grape/images/blog.jpg" width="293" height="22"/> 
            <iframe width="285" height="230" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=285&height=230&fansRow=2&ptype=1&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=2270881102&verifier=80e3196e&dpc=1"></iframe>

          </div>
        </div>

        <div class="middle">
       	 <img src="templates/grape/images/club.jpg" width="362" height="22" />
			<div class="des">
         		<img src="templates/grape/images/wine3.jpg" width="135" height="104" style="float:left;"/>
                	
			<div class="des1">
                	<span>
                    <a >美酒、美食品人生</a><br />
                    <span>[2012-11-09]</span>
                    </span>
                    <p>炎炎盛夏，一波波热浪席卷而来，但小弟的胃口并没有受到影响，因为有"香港酒神"黄雅历和香港著名</p>
            </div>
          	</div>
            
        	<ul>
           	  <li><a href="#">炎炎盛夏，一波波热浪席卷而来，但是...</a><span>[2012-16-12]</span></li>
           	  <li><a href="#">炎炎盛夏，一波波热浪席卷而来，但是...</a><span>[2012-16-12]</span></li>
           	  <li><a href="#">炎炎盛夏，一波波热浪席卷而来，但是...</a><span>[2012-16-12]</span></li>

            </ul>
          <img src="templates/grape/images/wine.jpg" width="346" height="161"  style="margin-left:7px;  margin-top:10px;"/>
        </div>
        
        <div class="right">
        	<img src="templates/grape/images/tuijian.jpg" width="241" height="22"  />
            <img src="templates/grape/images/wine1.jpg" width="240" height="185" style="margin-top:15px;"/>
            <img src="templates/grape/images/wine2.jpg" width="240" height="181" style="margin-top:3px;"/>
        </div>
        
     </div>
<script type="text/javascript">
function $(element){
 if(arguments.length>1){
  for(var i=0,length=arguments.length,elements=[];i<length;i++){
   elements.push($(arguments[i]));
  }
  return elements;
 }
 if(typeof element=="string"){
  return document.getElementById(element);
 }else{
  return element;
 }
}
var Class={
 create:function(){
  return function(){
   this.initialize.apply(this,arguments);
  }
 }
}
Function.prototype.bind=function(object){
 var method=this;
 return function(){
  method.apply(object,arguments);
 }
}
var Scroll=Class.create();
Scroll.prototype={
 initialize:function(element,height){
  this.element=$(element);
  this.element.innerHTML+=this.element.innerHTML;
  this.height=height;
  this.maxHeight=this.element.scrollHeight/2;
  this.counter=0;
  this.scroll();
  this.timer="";
  this.element.onmouseover=this.stop.bind(this);
  this.element.onmouseout=function(){this.timer=setTimeout(this.scroll.bind(this),1000);}.bind(this);
 },
 scroll:function(){
  if(this.element.scrollTop<this.maxHeight){
   this.element.scrollTop++;
   this.counter++;
  }else{
   this.element.scrollTop=0;
   this.counter=0;
  }
  if(this.counter<this.height){
   this.timer=setTimeout(this.scroll.bind(this),20);
  }else{
   this.counter=0;
   this.timer=setTimeout(this.scroll.bind(this),3000);
  }
 },
 stop:function(){
  clearTimeout(this.timer);
 }
}
var myscroll=new Scroll("myscroll",18);
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "grape/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</center>
</body>
</html>