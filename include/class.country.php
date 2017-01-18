<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class Country {

    private $sql;
    private $table = "s_country";

    public function __construct() {
        
    }

    public function addCountry($p,$imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(r_zcountry,r_jcountry,r_ecountry,r_area,r_pic)VALUES('%s','%s','%s','%s','%s')", mysql_real_escape_string($p ['r_zcountry']),mysql_real_escape_string($p ['r_jcountry']),mysql_real_escape_string($p ['r_ecountry']),mysql_real_escape_string($p ['r_area']),mysql_real_escape_string($imgname));
            mysql_query($this->sql);
            
            return mysql_insert_id();
        }
    }

    public function updatCountry($_array, $imgname) {
        $this->sql = "UPDATE " . $this->table . " 
		SET 
		r_zcountry='" . $_array ['r_zcountry'] . "',
		r_jcountry='" . $_array ['r_jcountry'] . "',
        r_ecountry='" . $_array ['r_ecountry'] . "',";
        if (!empty($imgname)) {
            $this->sql .= "r_pic='" . $imgname . "',";
        } 
        $this->sql .= "r_area='" . $_array ['r_area'] . "'where r_id=" . $_array ['id'];
		mysql_query($this->sql);
        return true;
    }

    public function _deleteCountry($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where r_id=" . $nid;
            mysql_query($sql);
        }
    }
	
    public function getCountry($p) {
        $this->sql="SELECT * from s_country where 1=1";
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
                $smarty->assign("classselect", explode(",", $array [0] ['p_class']));
                $smarty->assign("typeselect", $array [0] ['p_type']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }

        return false;
    }
	public function getALLCountry($p) {
        $this->sql="SELECT * from s_country";
        if (!empty($p)) {
            $this->sql .= $p;
        }            
        $result = mysql_query($this->sql);
        //echo $this->sql;
        $array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
    }


}

?>