<?php
/*
* 名称: 分页类
* 介绍: 适用于数组分页和配合sql查询的分页
* 作者: idlion || Moonfly ([email=id_lion@hotmail.com]id_lion@hotmail.com[/email])
* 创建时间: 2006-02-18
* 最后修改: 2007-05-24
*/

class WebPageBreak_admin {
	private $mTotalRowsNum = 0;   // 总信息行数
	private $mCurPageNumber = 1;  // 当前所在页
	private $mTotalPagesNum = 1;  // 总页数
	private $mQueryString;     // 页面传递的数据(url?后的字符串)
	private $mPageRowsNum = 20;  // 每页显示行数
	private $mIndexBarLength = 10;  // 索引条的页数
	private $mIndexBar = '';     // 页码索引条
	private $mPageInfo = '';     // 分页信息

	// 页码索引条样式
	private $mNextButton = "";
	private $mPreButton = "";
	private $mFirstButton = "";
	private $mLastButton = "";
	private $mCssIndexBarCurPage = "font-weight:bold;color:#FF0000";
	private $mCssIndexBarPage = '';
	// 分页信息样式
	private $mCssPageInfoNumFont = 'color:#FF0000';
	private $mCssPageInfoFont = '';

	// 构造方法
	public function __construct(&$rSqlQuery, $userPageRowsNum='') {

	//	$this -> mFirstButton = "<img src='".RELATIVE_IMG_PATH."/arrow_pre01.gif' border='0'> ";
		//$this -> mLastButton = "<img src='".RELATIVE_IMG_PATH."/arrow_next01.gif' border='0'> ";
		if( !is_array($rSqlQuery) ) {
			$this->SetDbPageBreak($rSqlQuery, $userPageRowsNum);
		}
		else {
			$this->SetArrayPageBreak($rSqlQuery, $userPageRowsNum);
		}
	}

	// 设置数据库型分页
	private function SetDbPageBreak(&$rSqlQuery, $userPageRowsNum='') {
		$this->SetDbTotalRowsNum($rSqlQuery);
		$this->SetTotalPagesNum($userPageRowsNum);
//		if( $this->mTotalPagesNum > 1 ) {
			$this->SetCurPageNumber();
			$this->SetSqlQuery($rSqlQuery);
			$this->SetQueryString();
			$this->SetIndexBar();
			$this->SetPageInfo();
//		}
	}

	// 设置数组型分页
	private function SetArrayPageBreak(&$rArray, $userPageRowsNum='', $userTotalRowsNum='') {
		$this->SetArrayTotalRowsNum($rArray, $userTotalRowsNum);
		$this->SetTotalPagesNum($userPageRowsNum);
//		if( $this->mTotalPagesNum > 1 ) {
			$this->SetCurPageNumber();
			$this->SetArray($rArray);
			$this->SetQueryString();
			$this->SetIndexBar();
			$this->SetPageInfo();
//		}
	}

	// 数据库型计算总行数
	private function SetDbTotalRowsNum($rSqlQuery) {
		$this->mTotalRowsNum = mysql_num_rows( mysql_query($rSqlQuery) );
	}

	// 数组型计算总行数
	private function SetArrayTotalRowsNum($array) {
		$this->mTotalRowsNum = count($array);
	}

	// 计算总页数
	private function SetTotalPagesNum($userPageRowsNum='') {
		if( $userPageRowsNum ) {
			$this->mPageRowsNum = $userPageRowsNum;
		}
		$this->mTotalPagesNum = (int)( floor( ($this->mTotalRowsNum-1)/$this->mPageRowsNum )+1 );
	}

	// 计算当前页数
	private function SetCurPageNumber() {
		if( !empty($_GET['cur_page']) ) {
			if( $_GET['cur_page'] <= $this->mTotalPagesNum) {
				$this->mCurPageNumber = $_GET['cur_page'];
			}else{
				if($this->mTotalPagesNum){
					$this->mCurPageNumber = $this->mTotalPagesNum;
				}else{
					$this->mCurPageNumber = 1;
				}
			}
		}
	}

	// 修正Sql截取语句
	private function SetSqlQuery(&$rSqlQuery) {
		$start_number = ($this->mCurPageNumber-1)*$this->mPageRowsNum;
		$rSqlQuery .= " LIMIT ".$start_number.",".$this->mPageRowsNum;
	}

	// 修正截取后的Array
	private function SetArray(&$rArray) {
		$start_number = ($this->mCurPageNumber-1)*$this->mPageRowsNum;
		$rArray = array_slice($rArray, $start_number, $this->mPageRowsNum);
	}

	// 修正 $_GET 传递数据
	private function SetQueryString() {
		$query_string = $_SERVER['QUERY_STRING'];
		if ( $query_string == '' ) {
			$this->mQueryString = "?cur_page=";
		}
		else {
			$this->mQueryString = preg_replace("/&?cur_page=\d+/", '', $query_string);
			$this->mQueryString = "?".$this->mQueryString."&cur_page=";
		}
	}

	// 设置页码索引条
	private function GetPageIndex() {
		if( $this->mTotalPagesNum <= $this->mIndexBarLength ) {
			$first_number = 1;
			$last_number = $this->mTotalPagesNum;
		}
		else {
			$offset = (int)floor($this->mIndexBarLength/2);
			if( ($this->mCurPageNumber-$offset) <= 1 ) {
				$first_number = 1;
			}
			elseif( ($this->mCurPageNumber+$offset) > $this->mTotalPagesNum ) {
				$first_number = $this->mTotalPagesNum-$this->mIndexBarLength+1;
			}
			else {
				$first_number = $this->mCurPageNumber-$offset;
			}
			$last_number = $first_number+$this->mIndexBarLength-1;
		}
		$last_number;
		$page_index = NULL;
		for( $i=$first_number; $i<=$last_number; $i++ ) {
			if( $this->mCurPageNumber == $i ) {
				$page_index .= "<strong>"."<div style='width:30px; height:18px; text-align:center; line-height:18px;  background:#d00010;border:1px solid #d00010;margin-right:3px; float:left; margin-right:3px;cursor: pointer;color:#ffffff'>$i</div>"."</strong>";
			}
			else {
				$page_index .= "<a style='text-decoration: none; color:#999999;' href='".$this->mQueryString.$i."' ><div style='width:30px; height:18px; text-align:center; line-height:18px; margin-right:3px; float:left; border:1px solid #999999;margin-right:3px;cursor: pointer;'>".$i."</div></a> ";
			}
		}
//		var_dump($page_index);
		return $page_index;
	}
	// 设置页码索引条
	private function SetIndexBar() {
		$this->mIndexBar = $this->GetNavFirstButton();
		$this->mIndexBar .= $this->GetNavPreButton();
		$this->mIndexBar .= $this->GetPageIndex();
		$this->mIndexBar .= $this->GetNavNextButton();
		$this->mIndexBar .= $this->GetNavLastButton();
		$this->mIndexBar .= $this->GetNavSelectButton();
	}
	 
	private function GetNavSelectButton(){
		
		return"
		<script>
        function tiaozhuan() {
        var str=document.getElementById('number').value;
       	window.location.href='".$this->mQueryString."'+str;
       	}
        </script>
        <div style='width:47px; height:20px; text-align:center; line-height:18px; margin-right:3px; float:left; _margin-right:3px;cursor: pointer;'>
        	<input id='number' name='number' style='width:47px; height:20px;background:url(/templates/Content/Public/images/go-bg2.jpg) no-repeat;border:none;text-indent: 0.5em;line-height:18px;' type='text' >
        </div>
		<input style='width:47px;height:20px;float:left;border:none;' type='image' src='/templates/Content/Public/images/gopic2.jpg' value='跳转' onclick='tiaozhuan()'>";
	} 
		

	// 得到页码索引条 首页按钮
	private function GetNavFirstButton() {
		return "<a style='text-decoration: none;color:#999999;' href='".$this->mQueryString."1'>".$this->mFirstButton."<div style='width:45px; height:18px; text-align:center; line-height:18px; border:1px solid #999999; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>首页</div></a> ";
	}
	

	// 得到页码索引条 上一页按钮
	private function GetNavPreButton() {
		if( $this->mCurPageNumber>1 ) {
			$pre_number = $this->mCurPageNumber-1;
		}
		else {
			$pre_number = 1;
		}
		return "<a style='text-decoration: none;color:#999999;' href='".$this->mQueryString.$pre_number."' class='page-prev'>".$this->mPreButton."<div style='width:45px; height:18px; text-align:center; line-height:18px; border:1px solid #999999; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>上一页</div></a> ";
	}

	// 得到页码索引条 下一页按钮
	private function GetNavNextButton() {
		if( $this->mCurPageNumber<$this->mTotalPagesNum ) {
			$next_number = $this->mCurPageNumber+1;
		}
		else {
			$next_number = $this->mTotalPagesNum;
		}
		return "<a style='text-decoration: none;color:#999999;' href='".$this->mQueryString.$next_number."' class='page-next' >".$this->mNextButton."<div style='width:45px; height:18px; text-align:center; line-height:18px; border:1px solid #999999; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>下一页</div></a> ";
	}

	// 得到页码索引条 末页按钮
	private function GetNavLastButton() {
		return "<a style='text-decoration: none;color:#999999;' href='".$this->mQueryString.$this->mTotalPagesNum."'>".$this->mLastButton."<div style='width:45px; height:18px; text-align:center; line-height:18px; border:1px solid #999999; margin-right:3px; float:left; margin-right:3px;cursor: pointer;'>尾页
</div></a> ";
	}

	// 设置分页信息
	private function SetPageInfo() {
		global $_Language;
		$this->mPageInfo ="<font style='".$this->mCssPageInfoFont."'>";
		$this->mPageInfo .= "共 <font style='".$this->mCssPageInfoNumFont."'>".$this->mTotalRowsNum."</font> 条信息 | ";
//		$this->mPageInfo .= "<font style='".$this->mCssPageInfoNumFont."'>".$this->mPageRowsNum."</font> 条/页 | ";
		$this->mPageInfo .= "共 <font style='".$this->mCssPageInfoNumFont."'>".$this->mTotalPagesNum."</font> 页 | ";
		$this->mPageInfo .= "第 <font style='".$this->mCssPageInfoNumFont."'>".$this->mCurPageNumber."</font> 页";
		$this->mPageInfo .= "</font>";
//		$this->mPageInfo .= $_Language['Total']." ".$this->mTotalRowsNum." ".$_Language['record(s)']."  &nbsp;&nbsp;&nbsp;";
//		$this->mPageInfo .= $_Language['Show']." ".$this->mPageRowsNum." ".$_Language['items']."  &nbsp;&nbsp;&nbsp;";
//		$this->mPageInfo .= " ".$_Language['Total']." ".$this->mTotalPagesNum." ".$_Language['Page(s)']." 　";
	}

	// 取出页码索引条
	public function GetIndexBar() {
		if($this->mTotalRowsNum==0){return "无数据";}
		else{return $this->mIndexBar;}
	}

	// 取出分页信息
	public function GetPageInfo() {
		return $this->mPageInfo;
		
	}
	public function GetPageInfo_1() {
		return "Total ".$this->mTotalRowsNum." record(s)　";
	}
	public function GetPageInfo_2() {
		return "Show ".$this->mPageRowsNum." items &nbsp;&nbsp;&nbsp;";
	}
	public function GetPageInfo_3() {
		return " Total ".$this->mTotalPagesNum." Page(s) 　";
	}

}


/*

用法说明：

用法1: 配合数据库使用(例子中配合的是我自己的数据库操作类和模版类)

// 这是一个sql查询语句，我们来对它的查询结果作出分页
$sql = "select * from member";

// 读取分页类
require_once("pagebreak.php");

// 分页初始化
// $sql就是上面的查询语句
// 20是每页显示的数量
// 通过分页类的初始化，这个查询语句就被加上" limit ...... "
$pagebreak = new PageBreak($sql, 20);

// 生成分页索引导航条
$navbar = $pagebreak->GetPageInfo().$pagebreak->GetIndexBar();

// 查询的结果(这里用我自己的类，不多说了)
$result = $db->GetFieldsArray($sql)

// 输出查询结果
var_dump($result);

// 输出分页索引导航条
echo $navbar; 

用法2: 配合要输出的数组

// 这是一个sql查询语句，并得到查询结果
$sql = "select * from member";
$result = $db->GetFieldsArray($sql);

// 读取分页类
require_once("pagebreak.php");

// 分页初始化
// $result就是上面的查询后得到的结果
// 20是每页显示的数量
// 通过分页类的初始化，这个结果数组被自动截取成相应页的信息内容
$pagebreak = new PageBreak($result, 20);

// 生成分页索引导航条
$navbar = $pagebreak->GetPageInfo().$pagebreak->GetIndexBar();

// 输出查询结果
var_dump($result);

// 输出分页索引导航条
echo $navbar; 

下面是输出样式，
前半部分信息条，是$pagebreak->GetPageInfo()
后半部分分页索引导航，是$pagebreak->GetIndexBar()


输出内容和样式可以很方便的在类中调整，很简单，有兴趣可以研究一下
*/
?>
