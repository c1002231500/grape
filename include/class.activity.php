<?php

require_once 'class.public_admin.php';
require_once 'class.public_japan.php';
require_once 'class.public_china.php';
require_once 'class.getfirstword.php';

class Activity {

    private $sql;
    private $table = "s_activity";

    public function __construct() {
        
    }

    public function addActivity($p,$imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(a_title,a_time,a_key,a_type,a_content,a_pic)VALUES('%s','%s','%s','%s','%s','%s')", mysql_real_escape_string($p ['a_title']),mysql_real_escape_string($p ['a_time']),mysql_real_escape_string($p ['a_key']),mysql_real_escape_string($p ['a_type']),mysql_real_escape_string($p ['com']),mysql_real_escape_string($imgname));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
    }

    public function updateActivity($_array,$imgname) {
        $this->sql = "UPDATE s_activity 
		SET 
		a_title='" . $_array ['a_title'] . "',
		a_time='" . $_array ['a_time'] . "',
		a_key='" . $_array ['a_key'] . "',
		a_type='" . $_array ['a_type'] . "',";
    	if (!empty($imgname)) {
            $this->sql .= "a_pic='" . $imgname . "',";
        }
        $this->sql .= "a_content='" . $_array ['com'] . "' where a_id=" . $_array ['a_id'];
		mysql_query($this->sql);	
        return true;	

    }


    public function _deleteActivity($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where a_id=" . $nid;
            mysql_query($sql);
        }
    }
	
    public function getActivity($p) {
        $this->sql="select * from s_activity where 1=1";
   
        if (!empty($p)) {
            $this->sql .= $p;
        }
       
     
		$pub = new pub_admin ();
		$prepage=20;
        $pub->getpage($this->sql,$prepage);
        //echo $pub;
        //echo $this->sql;
        $result = mysql_query($this->sql);
       // $sql .= " order by b_id desc";
        //$pub = new pub ();
        //$pub->getpage($this->sql, 20);
        //$result = mysql_query($this->sql);
		//echo $this->sql;
		
        $sql="select count(*) from s_activity where 1=1";
    	if (!empty($p)) {
            $sql .= $p;
        }
	    $res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$_SESSION['countactivity'] = $row[0];
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
               
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
	public function getActivity_1($p) {
        $this->sql="select a_id,a_title,a_time,a_key,a_type,replace(a_content,'&nbsp;','') as a_content,a_pic from s_activity where a_type=1";
   
        if (!empty($p)) {
            $this->sql .= $p;
        }
       
     
		$pub = new pub_admin ();
		$prepage=5;
        $pub->getpage($this->sql,$prepage);
        
        $result = mysql_query($this->sql);
       
		
       
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
               
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
	public function getActivity_2($p) {
        $this->sql="select a_id,a_title,a_time,a_key,a_type,replace(a_content,'&nbsp;','') as a_content,a_pic from s_activity where a_type=2";
   
        if (!empty($p)) {
            $this->sql .= $p;
        }
       
     
		$pub = new pub_admin ();
		$prepage=5;
        $pub->getpage($this->sql,$prepage);
        
        $result = mysql_query($this->sql);
       
		
       
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
               
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
	public function getActivity_3($p) {
        $this->sql="select a_id,a_title,a_time,a_key,a_type,replace(a_content,'&nbsp;','') as a_content,a_pic from s_activity where a_type=3";
   
        if (!empty($p)) {
            $this->sql .= $p;
        }
       
     
		$pub = new pub_admin ();
		$prepage=5;
        $pub->getpage($this->sql,$prepage);
        
        $result = mysql_query($this->sql);
       
		
       
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
               
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
	public function getActivity_index($p) {
        $this->sql="select a_id,a_title,a_time,a_key,a_type,replace(a_content,'&nbsp;','') as a_content,a_pic from s_activity where 1=1 order by a_id";
   
        if (!empty($p)) {
            $this->sql .= $p;
        }
       
     
		$pub = new pub_admin ();
		$prepage=3;
        $pub->getpage($this->sql,$prepage);
        //echo $pub;
        //echo $this->sql;
        $result = mysql_query($this->sql);
       // $sql .= " order by b_id desc";
        //$pub = new pub ();
        //$pub->getpage($this->sql, 20);
        //$result = mysql_query($this->sql);
		//echo $this->sql;
		
        $sql="select count(*) from s_activity where 1=1";
    	if (!empty($p)) {
            $sql .= $p;
        }
	    $res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$_SESSION['countactivity'] = $row[0];
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
               
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
    
    public function getByid($aid = null) {
        $sql = "select * from s_activity where 1=1";
        if ($aid) {
            $sql .= " and a_id=" . $aid;
        }
        $result = mysql_query($sql);

        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
         if (count($array) == 1) {
                global $smarty;

            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
    
}

?>