<?php
require_once 'Class.WebPageBreak.php';
class pub {
	public function __autoload() {
	
	}
	/*
 *分页效果 
 */
	function getpage(&$sql, $page) {
		global $smarty;
		mysql_query ( $sql );
		$pagebreak = new WebPageBreak ( $sql, $page );
		$navbar = $pagebreak->GetIndexBar ();
		$smarty->assign ( 'page', $navbar );
	}
}
?>