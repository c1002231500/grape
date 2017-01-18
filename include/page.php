<?php
	class page {
	 var $perpage= 10;  //每页显示多少条记录数
	 var $total;    //总记录数
	 var $curpage = 1;  //当前页码
	 var $pages;    //总页数 
	 var $offset;   //记录偏移量
	 var $filename='';   //分页文件名称
	 var $pagename = 'page'; //分页时用来传递参数的变量 如:"$filename?page=$curpage"
	 
	 function page($total,$perpage,$filename="",$pagename="page") {
	  $this->total = intval($total);
	  if(isset($perpage)) $this->perpage = $perpage;
	  $this->pages = ceil($this->total / $this->perpage);
	  $this->getcurpage();
	  $this->offset = ($this->curpage-1)*$this->perpage;
	  if(isset($pagename)) $this->pagename = $pagename;
	  if(isset($filename)) {
	   $this->filename = $filename;
	  } else {
	   $this->filename = $_SERVER['PHP_SELF'];
	  } 
	 }
	 function getcurpage() {
	  if(isset($_GET[$this->pagename])) $this->curpage = intval($_GET[$this->pagename]);
	  if($this->curpage < 1) $this->curpage = 1;
	  if($this->curpage > $this->pages) $this->curpage = $this->pages;
	 }
	 
	 function getfirstpage() {
	  if($this->curpage == 1) {
	   return "&nbsp;<a href=\"{$this->getlink(1)}\"><div style='width:60px; height:18px; text-align:center; line-height:18px; border:#CCCCCC 1px solid; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>首页</div></a>&nbsp;";
	  } else {
	   return "&nbsp;<a href=\"{$this->getlink(1)}\"><div style='width:60px; height:18px; text-align:center; line-height:18px; border:#CCCCCC 1px solid; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>首页</div></a>&nbsp;";
	  }
	 }
	 function getnextpage() {
	  $nextpage = $this->curpage + 1;
	  return "&nbsp;<a href=\"{$this->getlink($nextpage)}\"><div style='width:60px; height:18px; text-align:center; line-height:18px; border:#CCCCCC 1px solid; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>下一页</div></a>&nbsp;";
	 }
	 function getprepage() {
	  $prepage = $this->curpage - 1;
	  return "&nbsp;<a href=\"{$this->getlink($prepage)}\"><div style='width:60px; height:18px; text-align:center; line-height:18px; border:#CCCCCC 1px solid; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>上一页</div></a>&nbsp;";
	 }
	  
	 function getlastpage() {
	  if($this->curpage == $this->pages) {
	   return "&nbsp;尾页&nbsp;";
	  } else {
	   return "&nbsp;<a href=\"{$this->getlink($this->pages)}\"><div style='width:60px; height:18px; text-align:center; line-height:18px; border:#CCCCCC 1px solid; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>尾页</div></a>&nbsp;";
	  }
	 }
	 
	 function getlink($param) {
	  if(strpos($this->filename,'?')) {
	   return $this->filename."&".$this->pagename."=".$param;
	  } else {
	   return $this->filename."?".$this->pagename."=".$param;
	  } 
	 }
	 
	 function showpage() {
		if($this->total==0){return "无数据";}
		 
	  $begin = $this->curpage - 4;
			$end = $this->curpage + 5;
			if($this->curpage<=4){
					$begin = 1;
					$end = 10;
			}
			if($this->curpage > $this->pages-10){
					$begin = $this->pages - 10;
					$end = $this->pages;
			}
			if($begin<1){
					$begin = 1;
			}
			if($end>$this->pages){
					$end = $this->pages;
			}
			if($this->total>$this->perpage) {
			 $pagenav = $this->getfirstpage();
	   if($this->curpage > 1) {
		$pagenav .=  $this->getprepage();
	   }
	   for($i = $begin; $i <= $end; $i++) { 
		if($i == $this->curpage) {
		 $pagenav .=  '<font color="#FF0000">'."<div style='width:30px; height:18px; text-align:center; line-height:18px; border:#CCCCCC 1px solid; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>$i</div>".'</font>'." ";
		} else {
		 $pagenav .= "<a href=\"{$this->getlink($i)}\" style='text-decoration: none'><div style='width:30px; height:18px; text-align:center; line-height:18px; border:#CCCCCC 1px solid; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>$i</div></a>"." "; 
		}
	   }  
	   if($this->curpage < $this->pages) {
		$pagenav .= $this->getnextpage();
		$pagenav .= $this->getlastpage();
	   }  
			}
			return $pagenav;
	 }
	}
?>