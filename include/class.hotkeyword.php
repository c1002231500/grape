<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class Hotkeyword {

    private $sql;
    private $table = "s_hotkeyword";

    public function __construct() {
        
    }

	public function addHotkeyword($array) {
        $sql = "insert into s_hotkeyword(h_title)
		values('" . $array ['h_title'] . "')";
        $result = mysql_query($sql);
        if ($result) {
            return mysql_insert_id();
        }
        //echo $sql;exit;
    }

	public function _edithotkeyword($array) {
        header("Context-type:text/html;charset=utf-8");
        $sql = "update s_hotkeyword set h_title='" . $array ['h_title'] . "'";         
        $sql .= " where h_id=" . $array ['h_id'];
        mysql_query($sql);
        return true;
    }

    public function _deleteHotkeyword($hid = NULL) {
   	 	if (!empty($hid)) {
            $sql = "delete  from s_hotkeyword where h_id=" . $hid;
            mysql_query($sql);
        }
    }
	
    public function getHotkeyword($p) {
       $this->sql ="select * from s_hotkeyword where 1=1 ";        
        if (!empty($p)) {
            $this->sql .=  $p;
        }
        $this->sql .= " order by h_id desc";
		$pub = new pub_admin ();
		$prepage=20;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
       	//echo $this->sql;
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['n_class']));
                $smarty->assign("typeselect", $array [0] ['n_subclass']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
    public function getHotkeywordindex($p) {
       $this->sql ="select * from s_hotkeyword where 1=1 ";        
        if (!empty($p)) {
            $this->sql .=  $p;
        }
        $this->sql .= " order by h_id desc";
		$pub = new pub_admin ();
		$prepage=3;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
       	//echo $this->sql;
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['n_class']));
                $smarty->assign("typeselect", $array [0] ['n_subclass']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }

	
}

?>