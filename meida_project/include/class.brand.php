<?php
require_once 'class.public.php';
require_once 'class.getfirstword.php';
class Brand {
	private $sql;
	private $table = "s_brand";
	
	public function __construct() {
	
	}
	public function addBrands($p, $imgname) {
		/*
		 * 图片上传
		 */
		if (! empty ( $p )) {
			$this->sql = sprintf ( "INSERT INTO " . $this->table . "(b_cname,b_ename,b_jname,b_firstword,b_static,	b_logo,b_brief,b_class,b_type,b_url)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", mysql_real_escape_string ( $p ['cname'] ), mysql_real_escape_string ( $p ['ename'] ), mysql_real_escape_string ( $p ['jname'] ), mysql_real_escape_string ( getfirstchar ( $p ['cname'] ) ), mysql_real_escape_string ( $p ['static'] ), mysql_real_escape_string ( $imgname ), mysql_real_escape_string ( $p ['b_brief'] ), mysql_real_escape_string ( implode ( ",", $p ['b_class'] ) ), mysql_real_escape_string ( implode ( ",", $p ['b_type'] ) ),mysql_real_escape_string ( $p ['url'] ) );
			mysql_query ( $this->sql );
			return mysql_insert_id ();
		}
	}
	
	public function updatBrands($_array, $imgname) {
		$this->sql = "UPDATE " . $this->table . " 
		SET 
		b_cname='" . $_array ['cname'] . "',
		b_ename='" . $_array ['ename'] . "',
		b_jname='" . $_array ['jname'] . "',
		b_firstword='" . getfirstchar ( $_array ['cname'] ) . "',
		b_url='".$_array ['url']."',
		b_static='" . $_array ['static'] . "',";
		if (! empty ( $imgname )) {
			$this->sql .= "b_logo='" . $imgname . "',";
		}
		$this->sql .= "b_brief='" . $_array ['b_brief'] . "',
		b_class='" . implode ( ',', $_array ['b_class'] ) . "',
		b_type='" . implode ( ',', $_array ['b_type'] ) . "' where b_id=" . $_array ['id'];
		mysql_query ( $this->sql );
		return true;
	}
	

	public function _deleteBrands($nid = NULL) {
		if (! empty ( $nid )) {
			$sql = "delete  from " . $this->table . "  where b_id=" . $nid;
			mysql_query ( $sql );
		}
	}
	
	
	public function getBrands($p) {
		$this->sql = "SELECT * FROM " . $this->table . " WHERE 1=1";
		if (! empty ( $p )) {
			$this->sql .= $p;
		}
		$result = mysql_query ( $this->sql );
		$pub = new pub ();
		$pub->getpage ( $this->sql, 20 );
		
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			if (count ( $array ) == 1) {
				global $smarty;
				$smarty->assign ( "classselect", explode ( ",", $array [0] ['b_class'] ) );
				$smarty->assign ( "typeselect", $array [0] ['b_type'] );
			}
			return $array;
		}
		
		return false;
	}

}
?>