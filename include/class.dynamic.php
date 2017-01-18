<?php

require_once 'class.public_admin.php';
require_once 'class.public_japan.php';
require_once 'class.public_china.php';
require_once 'class.getfirstword.php';

class Dynamic {

    private $sql;
    private $table = "s_dynamic";

    public function __construct() {
        
    }

    public function addDynamic($p,$imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(d_title,d_time,d_key,d_type,d_content,d_pic)VALUES('%s','%s','%s','%s','%s','%s')", mysql_real_escape_string($p ['d_title']),mysql_real_escape_string($p ['d_time']),mysql_real_escape_string($p ['d_key']),mysql_real_escape_string($p ['d_type']),mysql_real_escape_string($p ['com']),mysql_real_escape_string($imgname));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
    }

    public function updateDynamic($_array,$imgname) {
        $this->sql = "UPDATE s_dynamic 
		SET 
		d_title='" . $_array ['d_title'] . "',
		d_time='" . $_array ['d_time'] . "',
		d_key='" . $_array ['d_key'] . "',
		d_type='" . $_array ['d_type'] . "',";
    	if (!empty($imgname)) {
            $this->sql .= "d_pic='" . $imgname . "',";
        }
        $this->sql .= "d_content='" . $_array ['com'] . "' where d_id=" . $_array ['d_id'];
		mysql_query($this->sql);	
        return true;	

    }


    public function _deleteDynamic($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where d_id=" . $nid;
            mysql_query($sql);
        }
    }
	
    public function getDynamic($p) {
        $this->sql="select * from s_dynamic where 1=1";
   
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
public function getDynamic_index($p) {
        $this->sql="select d_id,d_title,d_time,d_key,d_type,replace(d_content,'&nbsp;','') as d_content,d_pic from s_dynamic where 1=1 order by d_id";
   
        if (!empty($p)) {
            $this->sql .= $p;
        }
       
     
		$pub = new pub_admin ();
		$prepage=5;
        $pub->getpage($this->sql,$prepage);

        $result = mysql_query($this->sql);
;
		
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
public function getByid($did = null) {
        $sql = "select * from s_dynamic where 1=1";
        if ($did) {
            $sql .= " and d_id=" . $did;
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
	public function getDynamic_1($p) {
        $this->sql="select d_id,d_title,d_time,d_key,d_type,replace(d_content,'&nbsp;','') as d_content,d_pic from s_dynamic where d_type=1";
   
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
	public function getDynamic_2($p) {
        $this->sql="select d_id,d_title,d_time,d_key,d_type,replace(d_content,'&nbsp;','') as d_content,d_pic from s_dynamic where d_type=2";
   
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
	public function getDynamic_3($p) {
        $this->sql="select d_id,d_title,d_time,d_key,d_type,replace(d_content,'&nbsp;','') as d_content,d_pic from s_dynamic where d_type=3";
   
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
	
}

?>