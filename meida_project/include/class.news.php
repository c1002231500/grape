<?php
require_once 'class.public.php';
class news {
	public function __construct() {
	
	}
	/*
	 * 添加产品信息
	 */
	public function _insertData($array, $burl = null, $surl = null) {
		if (! $array [n_command]) {
			$array [n_command] = 0;
		}
		if(!$array[brand]){
			$array[brand]="0";
		}
		$sql = "insert into s_news(n_title,n_context,n_detail,n_keyword,n_province,n_pictitle,n_starttime,n_type,n_clickcount,n_systime,n_status,n_bigpicture,n_smpicture,n_recommend,n_remake,n_site,n_class,n_subclass,n_word,n_brand)
		values('" . $array ['n_title'] . "','" . $array ['com'] . "','" . $array ['n_context'] . "','" . $array ['n_keyword'] . "','" . $array ['n_country'] . "','" . $array ['n_pictitle'] . "','" . $array ['n_starttime'] . "','" . $array ['n_type'] . "',0,'" . mktime () . "',$array[n_status],'" . $burl . "','" . $surl . "',$array[n_command],$array[member],'" . $array [site] . "',$array[n_class],$array[n_ctype],'" . $array [word] . "',$array[brand])";
		$result = mysql_query ( $sql );
		if ($result) {
			return mysql_insert_id ();
		}
	}
	
	public function _GetAllNew($nid = null, $status = NULL, $limits = null, $type = null, $end = 6) {
		$sql = "select * from s_news left join s_brand on b_id=n_brand where 1=1";
		$count = mysql_query ( $sql );
		$count = mysql_num_rows ( $count );
		
		unset ( $_SESSION ['count'] );
		$_SESSION ['count'] = $count;
		
		if ($status) {
			$sql .= " and n_status=$status";
		}
		if ($nid) {
			$sql .= " and n_id=" . $nid;
		}
		if ($type) {
			$sql .= " and $type";
		}
		$sql .= " order by n_starttime desc,n_systime desc";
		
		$pub = new pub ();
		if ($limits) {
			$limits = $limits - 1;
			$sql .= " limit $limits,$end";
		} else {
			$pub->getpage ( $sql, 20 );
		}
		$result = mysql_query ( $sql );
		
		//条数
		//unset($_SESSION['count']);
		//  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));
		

		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
	
	//统计关键字
	public function GetKeyByTop10() {
		$sql = "select n_keyword from s_news where n_status=1";
		$result = mysql_query ( $sql );
		$array = array ();
		$join = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		foreach ( $array as $key => $value ) {
			$arraylist = split ( "　", $array [$key] ['n_keyword'] );
			foreach ( $arraylist as $k => $v ) {
				if (! empty ( $join [$v] )) {
					$num = $join [$v] + 1;
					$join [$v] = $num;
				} else {
					$join [$v] = 1;
				}
			}
		
		}
		
		arsort ( $join );
		$join = array_slice ( $join, 0, 15 );
		return $join;
	}
	
	public function getByid($nid = null) {
		$sql = "select * from s_news left join s_brand on b_id=n_brand where 1=1";
		if ($nid) {
			$sql .= " and n_id=" . $nid;
		}
		$result = mysql_query ( $sql );
		
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
	
	//点击率
	public function clickcount($num, $id) {
		++ $num;
		$sql = "update s_news set n_clickcount=$num where n_id=$id";
		mysql_query ( $sql );
	}
	
	public function _GetAllNewByID($_p = null) {
		$sql = "select * from s_news where 1=1";
		$count = mysql_query ( $sql );
		$count = mysql_num_rows ( $count );
		
		unset ( $_SESSION ['count'] );
		$_SESSION ['count'] = $count;
		
		if ($_p) {
			$sql .= $_p;
		}
		$sql .= " order by n_starttime desc";
		$pub = new pub ();
		$pub->getpage ( $sql, 20 );
		$result = mysql_query ( $sql );
		
		//条数
		//unset($_SESSION['count']);
		//  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));
		

		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
	
	//根据条件查询
	public function getnewByp($p, $is = null) {
		$sql = "select * from s_news left join s_brand on b_id=n_brand where 1=1";
		if ($p) {
			$sql .= " $p";
		}
		$result = mysql_query ( $sql );
		$array = array ();
		$i = 0;
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
			array_push ( $array [$i], ($i + 1) );
			$i ++;
		}
		
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
	
	/*
	 * 删除新闻链接
	 */
	public function _deletenews($nid = NULL) {
		if (! empty ( $nid )) {
			$sql = "delete  from s_news where n_id=" . $nid;
			mysql_query ( $sql );
		}
	}
	
	/*
	 * 编辑新闻链接
	 */
	public function _editnews($array, $burl = null, $surl = null) {
		header ( "Context-type:text/html;charset=utf-8" );
		if (! $array [n_command]) {
			$array [n_command] = 0;
		}
		$sql = "update s_news set n_class=" . trim ( $array ['n_class'] ) . ", n_subclass=" . trim ( $array ['n_ctype'] ) . ", n_title='" . $array ['n_title'] . "',n_context='" . $array ['com'] . "',n_detail='" . $array ['n_context'] . "',n_site='" . $array ['site'] . "',n_keyword='" . $array ['n_keyword'] . "',n_province='" . $array ['n_country'] . "',n_pictitle='" . $array ['n_pictitle'] . "',n_starttime='" . $array ['n_starttime'] . "',n_type= '" . $array ['n_type'] . "',n_systime='" . mktime () . "',n_status=$array[n_status],n_recommend=$array[n_command],n_remake=$array[member]";
		if (! empty ( $array [brand] )) {
			$sql .= ",n_brand=" . $array [brand];
		}
		if (! empty ( $array [word] )) {
			$sql .= ",n_word='" . $array [word] . "'";
		}
		if ($burl != "nofile") {
			$sql .= ",n_bigpicture='" . $burl . "'";
		}
		if ($surl != "nofile") {
			$sql .= ",n_smpicture='" . $surl . "'";
		}
		$sql .= " where n_id=" . $array ['n_id'];
		mysql_query ( $sql );
		return 1;
	}
}
?>