<?php
require_once 'page.php';
class pub {
	public function __autoload() {
	
	}
	/*
 *分页效果 
 */
	function getpage(&$sql,$prepage,$filename) {
		global $smarty;
		$nl = mysql_query($sql);
		$total = mysql_num_rows($nl);
		$page = new page($total,$prepage,$filename);
		$sql = $sql." limit $page->offset,$prepage";
		$newq = mysql_query($sql);
        $newlist = mysql_fetch_array($newq);
        $a= $page->showpage();
		$smarty->assign ( 'page', $a );
	}
 
}
?>