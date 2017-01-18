<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class Js {

    private $sql;
    private $table = "s_js";

    public function __construct() {
        
    }

	public function addJs($array, $burl = null) {
        $sql = "insert into s_js(j_title,j_starttime,j_detil,j_url,j_pic,j_systime,j_areaid)
		values('" . $array ['j_title'] . "','" . $array ['j_starttime'] . "','" . $array ['j_detil'] . "','" . $array ['j_url'] . "','" . $burl . "','" . mktime() . "',0)";
        $result = mysql_query($sql);
        if ($result) {
            return mysql_insert_id();
        }
        //echo $sql;exit;
    }

	public function _editjs($array, $burl = null) {
        header("Context-type:text/html;charset=utf-8");
        $sql = "update s_js set j_title='" . $array ['j_title'] . "',j_starttime='" . $array ['j_starttime'] . "',j_detil='" . $array ['j_detil'] . "',j_url='" . $array ['j_url'] . "',j_systime='" . mktime() . "'";   
        if ($burl != "nofile") {
            $sql .= ",j_pic='" . $burl . "'";
        }       
        $sql .= " where j_id=" . $array ['j_id'];
        mysql_query($sql);

        return true;
    }

    public function _deleteJs($jid = NULL) {
   	 	if (!empty($jid)) {
            $sql = "delete  from s_js where j_id=" . $jid;
            mysql_query($sql);
        }
    }
	
    public function getJs($p) {
       $this->sql ="select * from s_js where 1=1 ";        
        if (!empty($p)) {
            $this->sql .=  $p;
        }
        $this->sql .= " order by j_systime desc";
		$pub = new pub_admin ();
		$prepage=20;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
       
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

	public function _editJsareaid1($array)
	{
		header("Context-type:text/html;charset=utf-8");
        if (!empty( $array ['j_id1']) &&  $array ['j_id2']=='' &&  $array ['j_id3']=='' &&$array ['j_id4']=='') {
			$sql = "update s_js set j_areaid=1,j_systime='" . mktime() . "' where j_id=" . $array ['j_id1'];
        }
		if (!empty( $array ['j_id2']) &&  $array ['j_id1']=='' &&  $array ['j_id3']=='' &&$array ['j_id4']=='') {
			$sql = "update s_js set j_areaid=2,j_systime='" . mktime() . "' where j_id=" . $array ['j_id2'];
        }
		if (!empty( $array ['j_id3']) &&  $array ['j_id2']=='' &&  $array ['j_id1']=='' &&$array ['j_id4']=='') {
			$sql = "update s_js set j_areaid=3,j_systime='" . mktime() . "' where j_id=" . $array ['j_id3'];
        }
		if (!empty( $array ['j_id4']) &&  $array ['j_id2']=='' &&  $array ['j_id3']=='' &&$array ['j_id1']=='') {
			$sql = "update s_js set j_areaid=4,j_systime='" . mktime() . "' where j_id=" . $array ['j_id4'];
        }
        mysql_query($sql);
        //echo $array ['j_id2'];echo $array ['j_id3'];echo $array ['j_id4'];exit;
        return true;
	}



 	public function getJs1() {
       $this->sql ="select * from s_js where j_areaid=1 order by j_systime desc limit 0,1";        
        $result = mysql_query($this->sql);
        
       
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
public function getJs4() {
       $this->sql ="select * from s_js where j_areaid=4 order by j_systime desc limit 0,1";        
        $result = mysql_query($this->sql);
        
       
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
public function getJs2() {
       $this->sql ="select * from s_js where j_areaid=2 order by j_systime desc limit 0,1";        
        $result = mysql_query($this->sql);
        
       
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
public function getJs3() {
       $this->sql ="select * from s_js where j_areaid=3 order by j_systime desc limit 0,1";        
        $result = mysql_query($this->sql);
        
       
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