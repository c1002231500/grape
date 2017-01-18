<?php
require_once 'Class.WebPageBreak_china.php';
class pub_china {
	public function __autoload() {
	
	}
	/*
 *分页效果 
 */
	function getpage(&$sql, $page) {
		global $smarty;
		mysql_query ( $sql );
		$pagebreak = new WebPageBreak_china ( $sql, $page );
		$navbar = $pagebreak->GetIndexBar ();
		$smarty->assign ( 'page', $navbar );
		$a = $pagebreak->GetPageInfo();
		$smarty->assign ( 'page1', $a );
		
	}
}

?>