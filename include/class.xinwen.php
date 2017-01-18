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
         * Í¼Æ¬ÉÏ´«
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(x_title,x_starttime,x_acttime,x_pic,x_type,x_content,x_keyword)VALUES('%s','%s','%s','%s','%s','%s','%s')", mysql_real_escape_string($p ['x_title']),mysql_real_escape_string($p ['x_starttime']),mysql_real_escape_string($p ['x_acttime']),mysql_real_escape_string($imgname),mysql_real_escape_string($p ['x_type']),mysql_real_escape_string($p ['com']),mysql_real_escape_string($p ['x_keyword']));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
    }

    public function updateXinwen($_array,$imgname) {
        $this->sql = "UPDATE s_xinwen 
		SET 
		x_title='" . $_array ['x_title'] . "',
		x_starttime='" . $_array ['x_starttime'] . "',
		x_acttime='" . $_array ['x_acttime'] . "',
		x_type='".$_array['x_type'] . "',
		x_content='" . $_array ['com'] . "',";
		
    	if (!empty($imgname)) {
            $this->sql .= "x_pic='" . $imgname . "',";
        }
        $this->sql .= "x_keyword='" . $_array ['x_keyword'] . "' where x_id=" . $_array ['x_id'];
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
}	
?>	