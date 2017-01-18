<?php
require_once 'Class.WebPageBreak_japan.php';
class pub1 {
	public function __autoload() {
	
	}
	/*
 *分页效果 
 */
	function getpage1(&$sql, $page) {
		global $smarty;
		mysql_query ( $sql );
		$pagebreak = new WebPageBreak1( $sql, $page );
		$navbar = $pagebreak->GetIndexBar ();
		$smarty->assign ( 'page', $navbar );
		$a = $pagebreak->GetPageInfo();
		$smarty->assign ( 'page1', $a );
		
	}
}

?>