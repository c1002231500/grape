<?php
require_once 'Class.WebPageBreak_admin.php';
class pub_admin {
	public function __autoload() {
	
	}
	/*
 *分页效果 
 */
	function getpage(&$sql, $page) {
		global $smarty;
		mysql_query ( $sql );
		$pagebreak = new WebPageBreak_admin ( $sql, $page );
		$navbar = $pagebreak->GetIndexBar ();
		$smarty->assign ( 'page', $navbar );
		$a = $pagebreak->GetPageInfo();
		$smarty->assign ( 'page1', $a );

	}
}

?>