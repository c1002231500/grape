<?php
class Administrator {
	public function __construct() {
	
	}
	
	/*
	 * admin login
	 * by falcon
	 */
	public function login($_p) {
		$sql = "SELECT * FROM `s_admin` where " . $_p;
		$admin = mysql_query ( $sql );
		$admin = mysql_fetch_array ( $admin );
		if (! empty ( $admin )) {
			$_SESSION ['admin'] = $admin;
			return $admin;
		}
		return false;
	}
}
?>