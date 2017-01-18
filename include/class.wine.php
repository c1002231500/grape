<?php

require_once 'class.public_admin.php';
require_once 'class.public_japan.php';
require_once 'class.public_china.php';
require_once 'class.getfirstword.php';

class Wine {

    private $sql;
    private $table = "s_wine";

    public function __construct() {

    }

    public function addWine($p,$imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(w_country,w_chname,w_enname,w_genteral,w_single,w_color,w_year,w_content,w_descript,w_price,w_reserve,w_pic)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", mysql_real_escape_string($p ['w_country']),mysql_real_escape_string($p ['w_chname']),mysql_real_escape_string($p ['w_enname']),mysql_real_escape_string($p ['w_genteral']),mysql_real_escape_string($p ['w_single']),mysql_real_escape_string($p ['w_color']),mysql_real_escape_string($p ['w_year']),mysql_real_escape_string($p ['com']),mysql_real_escape_string($p ['w_descript']),mysql_real_escape_string($p ['w_price']),mysql_real_escape_string($p ['w_reserve']),mysql_real_escape_string($imgname));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
    }

	public function updateWine($_array,$imgname) {
        $this->sql = "UPDATE s_wine 
		SET 
		w_country='" . $_array ['w_country'] . "',
		w_chname='" . $_array ['w_chname'] . "',
		w_enname='" . $_array ['w_enname'] . "',
		w_genteral='" . $_array ['w_genteral'] . "',
		w_single='" . $_array ['w_single'] . "',
		w_color='" . $_array ['w_color'] . "',
		w_year='" . $_array ['w_year'] . "',
		w_content='" . $_array ['com'] . "',
		w_descript='" . $_array ['w_descript'] . "',	
		w_price='" . $_array ['w_price'] . "',";
    	if (!empty($imgname)) {
            $this->sql .= "w_pic='" . $imgname . "',";
        }
        $this->sql .= "w_reserve='" . $_array ['w_reserve'] . "' where w_id=" . $_array ['w_id'];
		mysql_query($this->sql);	
        return true;	

    }

	public function _deleteWine($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where w_id=" . $nid;
            mysql_query($sql);
        }
    }
	
	public function getWine($p) {
        $this->sql="select * from s_wine where 1=1 ";   
        if (!empty($p)) {
            $this->sql .= $p;
        }   
		echo $this->sql;
		//echo $_GET['year'];
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
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
    
}

?>