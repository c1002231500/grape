<?php

require_once 'class.public_admin.php';
require_once 'class.public_japan.php';
require_once 'class.public_china.php';
require_once 'class.getfirstword.php';

class Xinwen {

    private $sql;
    private $table = "s_xinwen";

    public function __construct() {
        
    }

    public function addXinwen($p,$imgname) {
        /*
         * ͼƬ�ϴ�
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(x_title,x_class,x_date,x_descript,x_choose,x_pic)VALUES('%s','%s','%s','%s','%s','%s')", mysql_real_escape_string($p ['x_title']),mysql_real_escape_string($p ['x_class']),mysql_real_escape_string($p ['x_date']),mysql_real_escape_string($p ['com']),mysql_real_escape_string($p ['x_choose']),mysql_real_escape_string($imgname));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
    }

    public function updateXinwen($_array,$imgname) {
        $this->sql = "UPDATE s_xinwen 
		SET 
		x_title='" . $_array ['x_title'] . "',
		x_class='" . $_array ['x_class'] . "',
		x_date='" . $_array ['x_date'] . "',
		x_descript='" . $_array ['com'] . "',";
    	if (!empty($imgname)) {
            $this->sql .= "x_pic='" . $imgname . "',";
        }
        $this->sql .= "x_choose='" . $_array ['x_choose'] . "' where x_id=" . $_array ['x_id'];
		mysql_query($this->sql);	
        return true;	

    }


    public function _deleteXinwen($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where x_id=" . $nid;
            mysql_query($sql);
        }
    }
	
    public function getXinwen($p) {
        $this->sql="select * from s_xinwen where 1=1";   
        if (!empty($p)) {
            $this->sql .= $p;
        }        
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
            }
            return $array;
        }
        return false;
    }
?>	